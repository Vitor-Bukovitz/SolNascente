import { Controller, Body, Post, Req, UseGuards, HttpStatus } from '@nestjs/common';
import { Request } from 'express';
import { DeepPartial } from 'typeorm';
import bcrypt from 'bcryptjs';

import { JwtAuthGuard } from '~/auth/gql-auth.guard';

import { AuthService } from '~/auth/auth.service';
import { DwellerService } from './dweller.service';
import { DwellerDto, DwellerLoginDto } from './dto/dweller-dto';

@Controller('dweller')
export class DwellerController {
  constructor(private readonly dwellerService: DwellerService, private readonly authService: AuthService) {}

  @Post('new')
  public async create(@Body() args: DwellerDto): Promise<DeepPartial<DwellerDto> | string> {
    args.password = await bcrypt.hash(args.password, 10);

    const dweller = await this.dwellerService.create(args);

    if (typeof dweller === 'boolean') {
      return JSON.stringify({ status: HttpStatus.BAD_REQUEST });
    }

    dweller.token = await this.authService.login(dweller.id);

    return dweller;
  }

  @Post('login')
  public async login(@Body() args: DwellerLoginDto): Promise<DeepPartial<DwellerDto> | string> {
    const dweller = await this.authService.validateUser(args.cpf, args.password);

    if (!dweller) {
      return JSON.stringify({ status: HttpStatus.UNAUTHORIZED });
    }

    dweller.token = await this.authService.login(dweller.id);

    return dweller;
  }

  @UseGuards(JwtAuthGuard)
  @Post('example')
  public async example(@Req() req: Request, @Body() args: DwellerDto): Promise<string> {
    console.log(req.user, args);
    return JSON.stringify({ status: 200 });
  }
}

import { Controller, Body, Post } from '@nestjs/common';
import { DeepPartial } from 'typeorm';

import { MoradorService } from './morador.service';
import { MoradorDto } from './dto/morador-dto';

@Controller('morador')
export class MoradorController {
  constructor(private readonly moradorService: MoradorService) {}

  @Post('new')
  public async create(@Body() args: MoradorDto): Promise<DeepPartial<MoradorDto> | { status: number }> {
    const morador = await this.moradorService.create(args);

    return morador;
  }
}

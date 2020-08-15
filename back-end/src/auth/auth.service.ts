import { Injectable } from '@nestjs/common';
import bcrypt from 'bcryptjs';
import { JwtService } from '@nestjs/jwt';
import { getConnection, DeepPartial } from 'typeorm';

import { DwellerDto } from '~/dweller/dto/dweller-dto';

@Injectable()
export class AuthService {
  constructor(private readonly jwtService: JwtService) {}

  public async validateUser(cpf: string, password: string): Promise<DeepPartial<DwellerDto> | null> {
    try {
      const dweller = (await getConnection()
        .query(`SELECT * FROM moradores WHERE cpf = "${cpf}"`)
        .catch(() => false)) as Promise<DeepPartial<DwellerDto>[] | boolean>;

      if (typeof dweller[0] === 'boolean') return null;

      dweller[0] = JSON.parse(JSON.stringify(dweller[0]));

      const { senha: passwordHash, ...result } = dweller[0];

      if (await bcrypt.compare(password, passwordHash)) return result;

      return null;
    } catch (error) {
      return null;
    }
  }

  public async login(id: number): Promise<string> {
    const payload = { id };
    return this.jwtService.sign(payload);
  }
}

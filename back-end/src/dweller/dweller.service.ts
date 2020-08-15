import { Injectable } from '@nestjs/common';
import { getConnection, DeepPartial } from 'typeorm';

import { DwellerDto } from './dto/dweller-dto';

@Injectable()
export class DwellerService {
  public async create(data: DwellerDto): Promise<DeepPartial<DwellerDto> | boolean> {
    const { name, cpf, password, telephone, number, block, profile } = data;

    const result = (await getConnection()
      .query(
        `INSERT INTO moradores (nome, cpf, senha, telefone, numero, bloco, perfil)
       VALUES ("${name}", "${cpf}", "${password}", "${telephone}", ${number}, ${block}, ${profile});`,
      )
      .catch(() => false)) as DwellerDto | boolean;

    if (typeof result === 'boolean') return result;

    const dweller = (await getConnection()
      .query(`SELECT nome, cpf, senha, telefone, numero, bloco, perfil FROM moradores WHERE cpf = "${cpf}"`)
      .catch(() => false)) as DeepPartial<DwellerDto>[];

    if (typeof dweller === 'boolean') return dweller;

    return dweller[0];
  }
}

import { Injectable, HttpStatus } from '@nestjs/common';
import { getConnection, DeepPartial } from 'typeorm';
import { MoradorDto } from './dto/morador-dto';

@Injectable()
export class MoradorService {
  public async create(data: MoradorDto): Promise<DeepPartial<MoradorDto> | { status: number }> {
    const { nome, cpf, senha, telefone, numero, bloco, perfil } = data;

    const moradorExite = (await getConnection().query(
      `SELECT cpf, telefone FROM moradores WHERE cpf = "${cpf}" OR telefone = "${telefone}" `,
    )) as DeepPartial<MoradorDto>[];

    if (moradorExite.length > 0) {
      return { status: HttpStatus.PRECONDITION_FAILED };
    }

    (await getConnection()
      .query(
        `INSERT INTO moradores (nome, cpf, senha, telefone, numero, bloco, perfil)
       VALUES ("${nome}", "${cpf}", "${senha}", "${telefone}", ${numero}, ${bloco}, ${perfil});`,
      )
      .catch((error) => JSON.stringify({ status: error }))
      .finally()) as MoradorDto;

    const morador = (await getConnection().query(
      `SELECT nome, cpf, telefone, numero, bloco, perfil FROM moradores WHERE cpf = "${cpf}"`,
    )) as DeepPartial<MoradorDto>[];

    return morador[0];
  }
}

import { IsString, MinLength, IsInt, IsEnum } from 'class-validator';
import { Transform } from 'class-transformer';

import { Cpf } from '~/cpf/cpf.service';

enum moradorEnum {
  'morador' = 1,
  'subsindico',
  'sindico',
}

export class MoradorDto {
  @IsString()
  nome: string;

  @IsString()
  @MinLength(4)
  senha: string;

  @Transform((cpf: string) => (Cpf.cpfIsValid(cpf) ? Cpf.cpfFormat(cpf) : undefined))
  @IsString()
  cpf: string;

  @IsString()
  telefone: string;

  @IsInt()
  numero: number;

  @IsInt()
  bloco: number;

  @IsEnum(moradorEnum)
  @Transform((perfil: string) => moradorEnum[perfil])
  perfil: number;
}

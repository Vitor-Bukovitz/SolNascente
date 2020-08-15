import { IsString, MinLength, IsInt, IsEnum, IsOptional } from 'class-validator';
import { Transform } from 'class-transformer';

import { Cpf } from '~/cpf/cpf.service';

enum dwellerEnum {
  'morador' = 1,
  'subsindico',
  'sindico',
}

export class DwellerDto {
  @IsOptional()
  @IsInt()
  id: number;

  @IsString()
  name: string;

  @IsString()
  @MinLength(4)
  password: string;

  @Transform((cpf: string) => (Cpf.cpfIsValid(cpf) ? Cpf.cpfFormat(cpf) : undefined))
  @IsString()
  cpf: string;

  @IsString()
  telephone: string;

  @IsInt()
  number: number;

  @IsInt()
  block: number;

  @IsEnum(dwellerEnum)
  @Transform((profile: string) => dwellerEnum[profile])
  profile: number;

  @IsOptional()
  token: string;
}

export class DwellerLoginDto {
  @Transform((cpf: string) => (Cpf.cpfIsValid(cpf) ? Cpf.cpfFormat(cpf) : undefined))
  @IsString()
  cpf: string;

  @IsString()
  password: string;
}

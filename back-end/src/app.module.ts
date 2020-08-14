import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';

import { ormConfig } from '~/config/orm.config';
import { MoradorModule } from './morador/morador.module';

@Module({
  imports: [TypeOrmModule.forRoot(ormConfig), MoradorModule],
})
export class AppModule {}

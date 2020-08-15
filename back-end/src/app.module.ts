import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { AuthModule } from './auth/auth.module';

import { ormConfig } from './config/orm.config';
import { DwellerModule } from './dweller/dweller.module';

@Module({
  imports: [TypeOrmModule.forRoot(ormConfig), DwellerModule, AuthModule],
})
export class AppModule {}

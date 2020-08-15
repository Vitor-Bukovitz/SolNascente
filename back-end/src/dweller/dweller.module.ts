import { Module } from '@nestjs/common';

import { AuthModule } from '~/auth/auth.module';

import { DwellerController } from './dweller.controller';
import { DwellerService } from './dweller.service';

@Module({
  controllers: [DwellerController],
  providers: [DwellerService],
  imports: [AuthModule],
})
export class DwellerModule {}

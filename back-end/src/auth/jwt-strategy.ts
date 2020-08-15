import { Injectable } from '@nestjs/common';
import { PassportStrategy } from '@nestjs/passport';
import { Strategy } from 'passport-jwt';

import { jwtStrategyConfig } from '~/config/jwt-strategy.config';

@Injectable()
export class JwtStrategy extends PassportStrategy(Strategy) {
  constructor() {
    super(jwtStrategyConfig);
  }

  async validate(payload: { id: number }): Promise<{ userId: number }> {
    return { userId: payload.id };
  }
}

import BaseController from './base-controller';
import accordion from '../components/accordion';
import transition from '../components/transition';
import dotdotdot from '../components/dotdotdot';

export default class RecruitController extends BaseController {

  init() {
    transition();
    accordion();
    dotdotdot();
  }
}
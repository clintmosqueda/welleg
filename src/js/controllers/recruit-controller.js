import BaseController from './base-controller';
import accordion from '../components/accordion';
import transition from '../components/transition';

export default class RecruitController extends BaseController {

  init() {
    transition();
    accordion();
  }
}
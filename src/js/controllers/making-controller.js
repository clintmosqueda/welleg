import BaseController from './base-controller';
import transition from '../components/transition';

export default class MakingController extends BaseController {

  init() {
    transition();
  }
}
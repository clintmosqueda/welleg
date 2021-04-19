import BaseController from './base-controller';
import singleLoad from '../components/single-load.js';

export default class SingleNewsController extends BaseController {
  init() {
  	singleLoad();
  }
}
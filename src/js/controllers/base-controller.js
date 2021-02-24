import HeaderNav from '../components/header-nav';

export default class BaseController {
  constructor() {
    new HeaderNav('.js-menu', '.js-header', '.js-nav-link');
    
    this.init();
  }

  init() {

  }
}

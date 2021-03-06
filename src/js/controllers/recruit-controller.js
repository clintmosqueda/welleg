import Accordion from '../components/accordion';

export default class RecruitController {
  constructor() {
    new Accordion('.js-accordion', '.js-accordion-wrap');

    this.init();
  }

  init() {

  }
}
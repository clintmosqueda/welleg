import Accordion from '../components/accordion';
import transition from '../components/transition';

export default class RecruitController {
  constructor() {
    new Accordion('.js-accordion', '.js-accordion-wrap');
    transition()

    this.init();
  }

  init() {

  }
}
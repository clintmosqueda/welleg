import $ from 'jquery';
import BaseController from './base-controller';
import activeSubmit from '../components/active-submit.js';

export default class ContactController extends BaseController {
  init() {
    activeSubmit()
    $('.contact-info').on('click', function() {
      $(this).toggleClass('active')
      console.log('adasd');
    })
  }
}

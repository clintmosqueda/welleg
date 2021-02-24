if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
}

//import 'intersection-observer';
import Hack from './components/hack';
import Router from './components/router';
import HomeController from './controllers/home-controller';

new Hack();

let routes = [
  {
    id: 'home',
    controller: HomeController
  },
];

let router = new Router(routes);
router.route();



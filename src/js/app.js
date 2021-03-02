if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
}

//import 'intersection-observer';
import Hack from './components/hack';
import Router from './components/router';
import HomeController from './controllers/home-controller';
import ArchiveNewsController from './controllers/archivenews-controller';
import RecruitController from './controllers/recruit-controller';

new Hack();

let routes = [
  {
    id: 'home',
    controller: HomeController
  },
  {
    id: 'post-type-archive-news',
    controller: ArchiveNewsController,
  },
  {
    id: 'recruit-page',
    controller: RecruitController
  }
];

let router = new Router(routes);
router.route();



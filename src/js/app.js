if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
}

import 'intersection-observer';
import Hack from './components/hack';
import Router from './components/router';
import HomeController from './controllers/home-controller';
import ArchiveNewsController from './controllers/archive-news-controller';
import RecruitController from './controllers/recruit-controller';
import SingleNewsController from './controllers/single-news-controller';
import AboutController from './controllers/about-controller';
import SingleSdgController from './controllers/single-sdg-controller';
import SingleStaffController from './controllers/single-staff-controller';
import MakingController from './controllers/making-controller';

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
  },
  {
    id: 'single-news',
    controller: SingleNewsController,
  },
  {
    id: 'about-page',
    controller: AboutController,
  },
  {
    id: 'single-sdg',
    controller: SingleSdgController,
  },
  {
    id: 'single-staff',
    controller: SingleStaffController,
  },
  {
    id: 'making-page',
    controller: MakingController,
  },
];

let router = new Router(routes);
router.route();



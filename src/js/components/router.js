import BaseController from '../controllers/base-controller';

export default class Router {

  constructor(routes = []) {
    this.routes = routes;
  }

  route() {
    let controller;

    this.routes.forEach((route) => {
      if (document.body.classList.contains(route.id)) {
        controller = new route.controller();
      }
    });

    if (!controller) {
      new BaseController();
    }
  }
}

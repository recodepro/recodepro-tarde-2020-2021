const { Router } = require('express');

const PostagensController = require('./controllers/PostagensController');
const CategoriasController = require('./controllers/CategoriasController');

const routes = new Router;

routes.get("/postagens", PostagensController.indexAction)
routes.post("/postagens", PostagensController.registrarPostagemAction)

routes.get("/categoria", CategoriasController.indexAction)

module.exports = routes;
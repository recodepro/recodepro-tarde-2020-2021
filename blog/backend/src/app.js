const express = require('express');
const cors = require('cors');

const routes = require('./routes')

class App {
    constructor() {
        this.server = express();
        this.middlewares();
        this.routes();
    }

    middlewares() {
        this.server.use(express.json());
        this.server.use(cors());
    }

    routes() {
        this.server.use(routes)
    }
}

const app = new App;

module.exports = app.server

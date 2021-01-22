const postagem = require('../models/Postagem');

class PostagensController {
    indexAction(req, res) {
        postagem.getAll(req, res)
    }

    registrarPostagemAction(req, res) {
        const { titulo, descricao } = req.body;

        postagem.titulo = titulo;
        postagem.descricao = descricao;
        postagem.registrarPostagem(req, res);
    }
}

module.exports = new PostagensController;
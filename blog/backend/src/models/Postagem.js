const connection = require('../config/connection');

class Postagem {
    constructor() {
        this.id;
        this.titulo;
        this.descricao;
    }

    getAll(req, res) {
        connection.query("SELECT * FROM postagens", (error, result) => {
            if (error) {
                res.send(error);
            } else {
                res.json(result);
            }
        });
    }

    registrarPostagem(req, res) {
        connection.query(
            `INSERT INTO postagens (titulo, descricao) values ('${this.titulo}', '${this.descricao}')`,
            (error, result) => { 
                if (error) {
                    res.send(error)
                } else {
                    res.status(201).send("Postagem cadastrada")
                }
            }
        );
    }
}

module.exports = new Postagem;
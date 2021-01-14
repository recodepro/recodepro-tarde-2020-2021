import express from 'express';
import cors from 'cors';
import mysql from 'mysql';

const server = express();

server.use(express.json());
server.use(cors());

const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "recode"
})

server.get("/usuarios", (req, res) => {
    connection.query("SELECT * FROM usuarios", (error, result) => {
        if (error) {
            res.send(error)
        } else {
            res.send(result)
        }
    })
});

server.post("/usuarios", (req, res) => {
    const { name } = req.body;
    connection.query(`INSERT INTO usuarios(name) values ('${name}')`, (error, result) => {
        if (error) {
            res.send("Erro ao inserir usuário")
        } else  {
            res.status(201).json({
                message: "Usuário cadastrado com sucesso"
            })
        }
    })
})

server.listen(3333);
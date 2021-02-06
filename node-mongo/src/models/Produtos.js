const { Schema, model } = require('mongoose')

const ProdutoSchema = new Schema({
    nome: {
        type: String
    },
    preco: {
        type: Number
    },
    data_registro: {
        type: Date,
        default: new Date()
    }
})

const modelo = model("produtos", ProdutoSchema)

module.exports = modelo
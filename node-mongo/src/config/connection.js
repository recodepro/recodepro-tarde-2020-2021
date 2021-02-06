const mongoose = require('mongoose');

function connection() {
    mongoose.connect("mongodb://localhost/ecommerce", { useNewUrlParser: true, useUnifiedTopology: true })
    
    .then(() => {
        console.log("MongoDB conectou com sucesso!")
    })
    .catch((error) => {
        console.log(error)
    })
}

module.exports = connection()
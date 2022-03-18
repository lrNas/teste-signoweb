const Sequelize = require("sequelize")
const sequelize = require("../Controllers/connector")

const Voto = sequelize.define("votos",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true
    }
})




module.exports = Voto;
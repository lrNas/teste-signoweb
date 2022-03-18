const Sequelize  = require("sequelize")
const sequelize = require("../Controllers/connector")

const Enquete = sequelize.define("enquete",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true,
        onDelete:"CASCADE"
    },
    titulo:{
        type:Sequelize.STRING(100),
        allowNull:false
    },
    dataInicio:{
        type:Sequelize.DATE,
        allowNull:false
    },
    dataFim:{
        type:Sequelize.DATE,
        allowNull:false
    }
})


module.exports = Enquete;

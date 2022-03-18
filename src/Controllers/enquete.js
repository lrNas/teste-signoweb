const Sequelize  = require("sequelize")
const sequelize = require("./connector")

const Enquete = sequelize.define("enquete",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true,
        allowNull:false
    },
    titulo:{
        type:Sequelize.STRING(30),
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

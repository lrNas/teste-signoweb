const Sequelize = require("sequelize")
const sequelize = require("./connector")

const Voto = sequelize.define("voto",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true
    }
})

Voto.hasOne("enquete",{
    as:"idEnquete",
    foreignKey:{
        name:"idEnquete",
        allowNull:false,
    },
    constraints:true
})

Voto.hasOne("option",{
    as:"idOption",
    foreignKey:{
        name:"idOption",
        allowNull:false,
    },
    constraints:true
})

module.exports = Option;
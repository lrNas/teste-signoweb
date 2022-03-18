const Sequelize  = require("sequelize")
const sequelize = require("../Controllers/connector")
const Voto = require("./voto");
const Option = require("./option");

const Enquete = sequelize.define("enquetes",{
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

Enquete.hasMany(Option,{
    as:"Option",
    onDelete:"cascade",
    sourceKey:"id",
    foreignKey:"idEnquete",
})

Enquete.hasMany(Voto,{
    as:"Voto",
    onDelete:"cascade",
    sourceKey:"id",
    foreignKey:"idEnquete"
})




module.exports = Enquete;

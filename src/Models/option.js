const Sequelize = require("sequelize")
const sequelize = require("../Controllers/connector");
const Voto = require("./voto");

const Option = sequelize.define("options",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true
    },
    description:{
        type:Sequelize.STRING(30),
        allowNull:false
    }
})

Option.hasMany(Voto,{
    as:"Voto",
    onDelete:"cascade",
    sourceKey:"id",
    foreignKey:"idOption"
})

module.exports = Option;
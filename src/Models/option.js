const Sequelize = require("sequelize")
const sequelize = require("../Controllers/connector");
const Enquete = require("./enquete");

const Option = sequelize.define("option",{
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

Option.belongsTo(Enquete,{
    sourceKey:"id",
    foreignKey:{
        name:"idEnquete",
        allowNull:false,
    },
    constraints:true
})

module.exports = Option;
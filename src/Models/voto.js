const Sequelize = require("sequelize")
const sequelize = require("../Controllers/connector")
const Enquete = require("./enquete")
const Option = require("./option")

const Voto = sequelize.define("voto",{
    id:{
        type:Sequelize.INTEGER(10),
        autoIncrement:true,
        primaryKey:true
    },
    idOption:{
        type:Sequelize.INTEGER(10),
        allowNull:false,
        references:{model:"options",key:"id"}
    }
})

Voto.belongsTo(Enquete,{
    sourceKey:"id",
    foreignKey:{
        name:"idEnquete",
        allowNull:false
    },
    constraints:true
})


module.exports = Voto;
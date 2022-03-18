const {Sequelize} =  require("sequelize")

const sequelize = new Sequelize(
    {
        host:"localhost",
        database:"db_teste",
        username:"root",
        password:"PassWd",
        dialect:"mysql"
    }
)

module.exports = sequelize;
const {Sequelize} =  require("sequelize")

const sequelize = new Sequelize(
    {
        host:"localhost",
        database:"db_teste",
        username:"root",
        password:"P4ssw0rd.",
        dialect:"mysql"
    }
)

module.exports = sequelize;
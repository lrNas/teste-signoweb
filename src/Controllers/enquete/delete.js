const Enquete = require("../../Models/enquete");

const Delete =(Enquete)=>{

    return await Enquete.destroy()
}
module.exports = Delete;
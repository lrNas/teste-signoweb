const database = require("./connector")
const Enquete = require("../Models/enquete")
const Option = require("../Models/option")
const Voto = require("../Models/voto")




const crud = async(model,values,action) =>{

    return myPromisse = new Promise((resolve,reject)=>{
        (async()=>{
            await database.sync()      
            let Model
            
            switch (model){
                case "enquete":
                    Model = Enquete;
                    break;
                case "option":
                    Model = Option;
                    break;
                case "voto":
                    Model = Voto;
                    break;
                default:
                    /* Tratar adequadamente */
                    reject("Modelo inválido")
            }
            try{ 
                switch(action){
                    case "create":
                        resolve(updated = await Model.create(values))
                        break;
                    case "delete": 
                        resolve(deteled = await Model.destroy(values))
                        break;
                    case "update":
                        resolve(updated = await Model.update(...values))
                        break;
                    case "request":
                        resolve(requested = await Model.findAll(values))
                        break;
                    case "count":
                        resolve(requested = await Model.count(values))
                        break;

                    }
                    
                }
                catch(err)
                {
                    reject(err)
                }
            })();
    })
}

            
    module.exports = crud;
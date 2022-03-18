

/*IIF */
(async() =>{
    const database = require("./Controllers/connector")
    const Enquete = require("./Models/enquete")
    const Option = require("./Models/option")
    const Voto = require("./Models/voto")
try{

    await database.sync()

/**Requiro a criação da tabela e depois a destruição */

    const novaEnquete = await Enquete.create(
        {
            titulo:"Você gostaria de ser contratado?",
            dataInicio:new Date(2022,2,20,14,20),
            dataFim:new Date(2022,10,08,05,00)
        }
    )
    console.log("Done Enquete")

    const novaOption1 = await Option.create(
        {
            description:"Sim",
            idEnquete:1
        }
    )

    console.log("Done OP1")
    const novaOption2 = await Option.create(
        {
            description:"Não",
            idEnquete:1
        }
    )


    const novaOption3 = await Option.create(
        {
            description:"Talvez",
            idEnquete:1
        }
    )


    const novoVoto = await Voto.create(
        {
            idOption:1,
            idEnquete:1
        }
    )
    

    const enquetes = await Enquete.findAll()

    const options = await Option.findAll()
    
    const votos = await Voto.findAll()
    
    await database.query("commit")

    console.log(enquetes, options, votos)

}
catch(err){
    console.log(err)
}
    // await novaEnquete.destroy()
    // await novaOption1.destroy()
    // await novaOption2.destroy()
    // await novaOption3.destroy()
    // await novoVoto.destroy()

})()
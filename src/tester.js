

/*IIF */
(async() =>{
    const database = require("./Controllers/connector")
    const crud = require("./Controllers/crud")
    const Enquete = require("./Models/enquete")
    const Option = require("./Models/option")
    const Voto = require("./Models/voto")
try{

    

    const requestedEnquete = crud("enquete",   
    {
        where: {
          id: 4
        }
    },
    "request")

   const createdEnquete = crud("enquete",{
                titulo:"Você gostaria de ser contratado?",
                dataInicio:new Date(2022,2,20,14,20),
                dataFim:new Date(2022,10,08,05,00)
            },"create")

    const deletedEnquete = crud("enquete", {
        where:{id:5},
        cascade:true
    },"delete")
    
    const updatedEnquete = crud("enquete",   
    [
        {titulo: "Você quer trabalhar aqui?"},
        {where: { id: 2 }}
    ],
    "update")

    {

        
        /**Requiro a criação da tabela e depois a destruição */

        // const novaEnquete = await Enquete.create(
            //     {
                //         titulo:"Você gostaria de ser contratado?",
                //         dataInicio:new Date(2022,2,20,14,20),
                //         dataFim:new Date(2022,10,08,05,00)
                //     }
                // )
                
                // const novaOption1 = await Option.create(
                    //     {
                        //         description:"Sim",
    //         idEnquete:5
    //     }
    // )
    
    // console.log("Done OP1")
    // const novaOption2 = await Option.create(
        //     {
            //         description:"Não",
    //         idEnquete:5
    //     }
    // )


    // const novaOption3 = await Option.create(
        //     {
            //         description:"Talvez",
            //         idEnquete:5
            //     }
            // )
            
            
            // const novoVoto = await Voto.create(
                //     {
                    //         idOption:novaOption3.id,
                    //         idEnquete:5
                    //     }
                    // )
                    
                }

                createdEnquete.then(
                    (data)=>console.log("\n \n \n Created Enquete -------------------- \n"+
                    data)
                )
                
                requestedEnquete.then(
                        (data)=>console.log("\n \n \n Requested Enquete -------------------- \n"+
                           data)
                    )
                
                updatedEnquete.then(
                    (data)=>console.log("\n \n \n Updated Enquete -------------------- \n"+
                    data)
                )

                deletedEnquete.then(
                    (data)=>console.log("\n \n \n Deleted Enquete -------------------- \n"+
                    data)
                )
                    
                    
}
catch(err){
    console.log(err)
}
    // await novaOption1.destroy()
    // await novaOption2.destroy()
    // await novaOption3.destroy()
    // await novoVoto.destroy()

})()
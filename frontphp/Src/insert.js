
function insert(operation){

    console.log("Passou do loader");
    let options = document.getElementsByClassName("optionsinput");
    let validator=true;
    /**Realizar um prompt de erros e sucessos */
    let titulo = document.getElementById("tituloenquete").value.replace(/(\r\n|\n|\r)/gm, "");
    let dataInicial= document.getElementById("datainicial");
    let dataFinal= document.getElementById("datafim");
    validator = validador(titulo,options,dataInicial,dataFinal);

    if(operation=="createenquete"){
        let newop="postenquete";
        /**Realizar um prompt de erros e sucessos */
        let sucess = cookiewriter(validator,newop,dataInicial,dataFinal);
        document.location.reload();
    }
    
    if(operation=="updateenquete"){
        console.log(operation);

            let newop = "postupdate";
            let sucess = cookiewriter(validator,newop,dataInicial,dataFinal); 
        document.location.reload()
    }
}
        

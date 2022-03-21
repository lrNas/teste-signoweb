<script>
    function openpopup (id,op){
        /**createenquete */
        document.cookie ="popup=true";
        document.cookie = `operation=createenquete`;
        document.cookie =`errorprompt=`;

        if(op=="readenquete"){
            document.cookie = `operation=readenquete`;
            document.cookie =`idenquete=`+id;
        }
        document.location.reload();
    }

    function update()
    {
        document.cookie = `operation=updateenquete`;
        document.location.reload();
    }


    function popupclose(){
        document.cookie ="popup=false";
        document.cookie = "operation=close";
        document.cookie =`idenquete=0`;
        document.cookie =`errorprompt=`;

        document.location.reload();
    }

    function insert(operation){

        if(operation=="createenquete"){

            let options = document.getElementsByClassName("optionsinput");
            let optionsValues = []
            let validator=true;
        
            /**Realizar um prompt de erros e sucessos */
            
            let titulo = document.getElementById("tituloenquete").value.replace(/(\r\n|\n|\r)/gm, "");
            
            if(titulo.length<5){
                document.cookie =`errorprompt=Não serão aceitos títulos de menos de 5 letras.`;
                validator = false;
            }
            
            if(validator==true){
                document.cookie="enquetetitle="+titulo;
                
                for(option of options){

                    if(option.value==""){
                        document.cookie =`errorprompt=São necessárias ao menos 3 opções para a enquete.`;
                    validator = false;
                    break;
                    }
                    optionsValues.push(option.value);
                }
                
                
            }
            let dataInicial= document.getElementById("datainicial");
            var inicial = new Date(dataInicial.value);
            
            
            if(validator==true&&isNaN(inicial)){
            document.cookie =`errorprompt=Data inicial não pode estar vazia.`;
            validator = false;
            }
                
            let dataFinal= document.getElementById("datafim");
                var final = new Date(dataFinal.value);
                console.log(final)

                if(validator==true&&isNaN(final)){
                    
                    document.cookie =`errorprompt=Data final não pode estar vazia.`;
                    validator = false;
                }
                

                if(validator==true){
                    document.cookie="operation=postenquete";
                    document.cookie=`enquetestart=${dataInicial.value}`;
                    document.cookie=`enqueteend=${dataFinal.value}`;
                    document.cookie=`enqueteoptions=${JSON.stringify(optionsValues)}`;
                    document.cookie =`errorprompt=`;
                    document.cookie ="popup=false";
                }    
                document.location.reload();
    }

    if(operation=="updateenquete"){
        console.log(operation);
        let options = document.getElementsByClassName("optionsinput");
            let optionsValues = [];
            console.log(options);
            let validator=true;
            /**Realizar um prompt de erros e sucessos */
            let titulo = document.getElementById("tituloenquete").value.replace(/(\r\n|\n|\r)/gm, "");

            if(titulo.length<5){
                document.cookie =`errorprompt=Não serão aceitos títulos de menos de 5 letras.`;
                validator = false;
            }
            if(validator==true){
                document.cookie="enquetetitle="+titulo;
                for(option of options){
                    if(option.value==""){
                        document.cookie =`errorprompt=São necessárias ao menos 3 opções para a enquete.`;
                        validator = false;
                        break;
                    }
                    option = { idOption:option.getAttribute("key"),
                        description:option.value      
                    }

                    optionsValues.push(option);
                }  
            }
        
        
            let dataInicial= document.getElementById("datainicial");
            var inicial = new Date(dataInicial.value);
        
        if(validator==true&&isNaN(inicial)){
            document.cookie =`errorprompt=Data inicial não pode estar vazia.`;
            validator = false;
        }
        
        let dataFinal= document.getElementById("datafim");
        var final = new Date(dataFinal.value);
        
        if(validator==true&&isNaN(final)){
            
            document.cookie =`errorprompt=Data final não pode estar vazia.`;
            validator = false;
        }
        
        
        if(validator==true){
            console.log("Escrevendo cookies");
            document.cookie="operation=postupdate";
            document.cookie=`enquetestart=${dataInicial.value}`;
            document.cookie=`enqueteend=${dataFinal.value}`;
            document.cookie=`enqueteoptions=${JSON.stringify(optionsValues)}`;
            document.cookie =`errorprompt=`;
            document.cookie ="popup=false";
        }
        document.location.reload()
    }

    }
    
    function search(){
        let dataInicial= document.getElementById("idSearch");
        openpopup(dataInicial.value,"readenquete")
    }
    
     function votar(id,idenq){
         document.cookie="operation=postvoto";
         document.cookie="idoption="+id;
         document.cookie ="popup=false";
        document.location.reload();
     }
     
     function filtrar(filtro){
         switch(filtro){
             case "todas":
                document.cookie =`filtro=todos`;
                break;
            case "atuais":
                document.cookie =`filtro=atual`;
                break;
            case "encerradas":
                document.cookie =`filtro=encerrado`;
                break;
            case "futuras":
                document.cookie =`filtro=futuro`;
                break;
            }
            document.location.reload();
        }
</script>
function validador(titulo,options,dataInicial,dataFinal){
    let validator=true;

    var inicial = new Date(dataInicial.value);
    var final = new Date(dataFinal.value);
    optionsValues=[];
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

    if(validator==true&&isNaN(inicial)){
    document.cookie =`errorprompt=Data inicial não pode estar vazia.`;
    validator = false;
    }
        if(validator==true&&isNaN(final)){
            
            document.cookie =`errorprompt=Data final não pode estar vazia.`;
            validator = false;
        }
    return [validator,optionsValues];
}

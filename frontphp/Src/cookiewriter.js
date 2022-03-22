

function cookiewriter(validator,newop,dataInicial,dataFinal)
{
    let optionsValues = []
    if(validator[0]==true){
    optionsValues = JSON.stringify([...validator[1]]);
    document.cookie=`operation=${newop}`;
    document.cookie=`enquetestart=${dataInicial.value}`;
    document.cookie=`enqueteend=${dataFinal.value}`;
    document.cookie=`enqueteoptions=${optionsValues}`;
    document.cookie =`errorprompt=`;
    document.cookie ="popup=false";
    }
    return validator[0];  
}
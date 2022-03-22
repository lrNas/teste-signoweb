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

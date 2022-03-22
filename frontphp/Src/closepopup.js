function closepopup(){
    document.cookie ="popup=false";
    document.cookie = "operation=close";
    document.cookie =`idenquete=0`;
    document.cookie =`errorprompt=`;
    document.location.reload();
}
// OK
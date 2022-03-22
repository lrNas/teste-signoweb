function votar(id){
     document.cookie="operation=postvoto";
     document.cookie="idoption="+id;
     document.cookie ="popup=false";
    document.location.reload();
}
// OK
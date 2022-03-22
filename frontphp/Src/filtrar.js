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
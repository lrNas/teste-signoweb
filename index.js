const express = require("express");
const app = express();
const enquete = require( "./src/Routes/enquete")
const option = require( "./src/Routes/option")
const voto = require( "./src/Routes/voto")
app.use(express.json());

// const php = require('php')
// const path = require('path')
// app.set("views", path.join(__dirname,"/src/Views"))
// app.set("view engine", php)
// app.engine('php',php.__express)

app.use((req, res, next) => {
    res.append('Access-Control-Allow-Origin', ['*']);
    res.append('Access-Control-Allow-Methods', 'GET, PUT, POST, DELETE');
    res.append('Access-Control-Allow-Headers', 'Content-Type');
    next();
});

app.use(enquete);
app.use(option);
app.use(voto);



// app.get("/",(req,res)=>{
//     res.render("teste.php", {var1:"teste",var2:"teste2"})
// }
// )

app.listen(3030, () => {
    console.log("Server em execução!");
});
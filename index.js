const express = require("express");
const app = express();
const crud = require("./src/Controllers/crud")

app.use(express.json());
app.use((req, res, next) => {
    res.append('Access-Control-Allow-Origin', ['*']);
    res.append('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.append('Access-Control-Allow-Headers', 'Content-Type');
    next();
});


app.get("/enquetes", (req, res) => {
    crud("enquete",   
    {},
    "request").then(data=>res.send(data)
)

    
 
});

app.listen(3030, () => {
    console.log("Server em execução!");
});
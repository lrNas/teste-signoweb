const express = require("express");
const app = express();
const crud = require("./src/Controllers/crud")
const enquete = require( "./src/Routes/enquete")
const option = require( "./src/Routes/option")
const voto = require( "./src/Routes/voto")
const php = require('php')

app.use(express.json());
app.use((req, res, next) => {
    res.append('Access-Control-Allow-Origin', ['*']);
    res.append('Access-Control-Allow-Methods', 'GET, PUT, POST, DELETE');
    res.append('Access-Control-Allow-Headers', 'Content-Type');
    next();
});

app.use(enquete);
app.use(option);
app.use(voto);

app.listen(3030, () => {
    console.log("Server em execução!");
});
const express = require("express");
const app = express();

app.use(express.json());
app.use((req, res, next) => {
    res.append('Access-Control-Allow-Origin', ['*']);
    res.append('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.append('Access-Control-Allow-Headers', 'Content-Type');
    next();
});


app.get("/", (req, res) => {
    
 
});

app.listen(3030, () => {
    console.log("Server em execução!");
});
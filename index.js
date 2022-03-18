const express = require("express");
const app = express();
const crud = require("./src/Controllers/crud")

app.use(express.json());
app.use((req, res, next) => {
    res.append('Access-Control-Allow-Origin', ['*']);
    res.append('Access-Control-Allow-Methods', 'GET, PUT, POST, DELETE');
    res.append('Access-Control-Allow-Headers', 'Content-Type');
    next();
});

app.get("/enquete/:id", (req, res) => {
    crud("enquete",   
        {
            where: {
                id: req.params.id
            }
        },
        "request"
    )
    .then(data=>res.status(200).json(data)
    )
    .catch(err=>
        {
            res.status(400).json(err)
        })
});

app.get("/enquetes", (req, res) => {
    crud("enquete",   
        {},
        "request"
    )
    .then(data=>res.status(200).json(data)
    )
    .catch(err=>
        {
            res.status(400).json(err)
        })
});

app.post("/enquete", (req, res) => {
    crud("enquete",   
        {
            titulo:req.body.titulo,
            dataInicio:req.body.dataInicio,
            dataFim:req.body.dataFim
        },
        "create"
    )
    .then(data=>res.status(200).json(data)
    )
    .catch(err=>
    {
        res.status(400).json(err)
    })
});

app.put("/enquete", (req, res) => {
        
        crud("enquete",   
        [
            {
                titulo: req.body.titulo,
                dataInicio:req.body.dataInicio,
                dataFim:req.body.dataFim
            },
            {where: { id: req.body.id }}
        ],
        "update"
        )
        .then(data=>res.status(200).json(data)
    )
    .catch(err=>
        {
            res.status(400).json(err)
        })
    });


app.listen(3030, () => {
    console.log("Server em execução!");
});
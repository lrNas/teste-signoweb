const express = require('express')
const router = express.Router()
const crud = require("../Controllers/crud")


router.get("/enquete", (req, res) => {
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

router.post("/enquete", (req, res) => {
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

router.put("/enquete", (req, res) => {
        
        crud("enquete",   
        [
            {
                titulo: req.body.titulo,
                dataInicio:req.body.dataInicio,
                dataFim:req.body.dataFim
            },
            {where: { id: req.body.idEnquete }}
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

    router.delete("/enquete", (req, res) => {
        
        crud("enquete",   
        
            {
                where: { id: req.body.idEnquete }
            }
            ,
        "delete"
        )
        .then(data=>res.status(200).json(data)
    )
    .catch(err=>
        {
            res.status(400).json(err)
        })
    });

    router.get("/enquete/count", (req, res) => {
        
        crud("enquete",   

            {}
            ,
        "count"
        )
        .then(data=>res.status(200).json(data)
    )
    .catch(err=>
        {
            res.status(400).json(err)
        })
    });

    router.get("/enquete/:id", (req, res) => {
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



module.exports = router
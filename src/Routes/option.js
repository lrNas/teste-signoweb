const express = require('express')
const router = express.Router()
const crud = require("../Controllers/crud")

router.get("/option/count", (req, res) => {
        
    crud("option",
        {},
    "count"
    )
    .then(data=>res.status(200).json(data)
)

.catch(err=>
    {
        res.status(400).json(err)
    })
});


router.get("/option/count/:id", (req, res) => {
        
    crud("option",   

        {where:{idEnquete:req.params.id}}
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

router.get("/option/enq/:id", (req, res) => {
    crud("option",   
        {
            where: {
                idEnquete: req.params.id
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

router.get("/option/:id", (req, res) => {
    crud("option",   
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


router.get("/option", (req, res) => {
    crud("option",   
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

router.post("/option", (req, res) => {
    crud("option",   
        {
            description:req.body.description,
            idEnquete:req.body.idEnquete
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

router.put("/option", (req, res) => {
        
        crud("option",   
        [
            {
                description:req.body.description,
                idEnquete:req.body.idEnquete
            },
            {where: { id: req.body.idOption }}
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

    router.delete("/option", (req, res) => {
        
        crud("option",   
        
            {
                where: { id: req.body.idOption }
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


module.exports = router
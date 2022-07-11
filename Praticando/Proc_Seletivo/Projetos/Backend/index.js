const express = require('express')
const morgan = require('morgan')
const cors = require('cors')
const bodyParser = require('body-parser')
const cadastro = require('./caduser.json')



const app = express()

app.use(morgan('dev'))
app.use(bodyParser.urlencoded({extended: false}))
app.use(express.json())
app.use(cors())



 let db = [
    {
        "id": 1,
        "nome": "Ana",
        "age": "35"
      },
      {
        "id": 2,
        "nome": "João",
        "age": "20"
      }
]
    let valores = [cadastro]


app.get('/', (req, res) => { 
    return res.json(cadastro)
    }
);
app.listen(21262, () => {
    console.log('Express será iniciado pelo endereço http://localhost:21262')
})
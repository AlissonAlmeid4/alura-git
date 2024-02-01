const mysql = require('mysql2');

const connection = mysql.createConnection({
    host: 'localhost', // process.env.DB_HOST,
    user: 'root', // process.env.DB_USER,
    password: '1234',// process.env.DB_PASSWORD,
    database: 'DBAJ' //process.env.DB_NAME
});

connection.connect((error)=>{
    if (error) throw error;
    console.log(`Conectado ao Banco de Dados: ${process.env.DB_NAME}`)
})
module.exports = connection;
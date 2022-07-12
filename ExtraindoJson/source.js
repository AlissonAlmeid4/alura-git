const dados = 'http://files.cod3r.com.br/curso-js/funcionarios.json' ; 
const axios = require('axios') ; 

axios.get(dados).then(response => {
  const funcionarios = response.data
  console.log(funcionarios)
})


 

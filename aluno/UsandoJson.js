const dados = {	"nome": "Pedro", "altura": 1.90, "idade": 15 }
const dados2 = [	'Pedro', 'João', 'guilherme' ]

//console.log(typeof dados);
let texto = JSON.stringify(dados)
//console.log(typeof texto);

 //console.log(dados.nome)
// console.log( dados.altura)
//export default dados;

dados2.forEach(function(nome, indice) {
    console.log(`${indice+1}) ${nome}`)
});
dados2.forEach(nome => console.log(nome))
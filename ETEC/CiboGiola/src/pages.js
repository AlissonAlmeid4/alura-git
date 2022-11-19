//Função para aparecer tela de login
// $('.parteinterna>img, .parteinterna2>img').click(function(foto){
//     id = $(this).attr('alt');
//     $(id).fadeIn(1000);
// });

// $('.imggrande>img').click(function(){
//     $(this).fadeOut(1000);
// });

// Login
function login() {
    $('#fundologin').fadeToggle(1000);
}
function sair() {
    //alert("Até logo !")
    window.location.href = "logoff.php";
}
function esquecisenha() {
    window.location.href = "RecSenha.php";
}

$('nav>button').click(function () {
    proximo = $(this).next().slideToggle(1000);

});

function esconder() {
    $('nav>button').next().fadeOut(0);
};

$('#img>img').click(function () {
    const url = this.src;
    const regex = /\/CiboGiola\/([^]+)/;
    var caminho = "../" + regex.exec(url)[1];

    var x = document.createElement("img");
    x.setAttribute("src", caminho);
    x.setAttribute("id", "imggrande");

    var divNova = document.createElement("div");
    divNova.setAttribute("id", "caixa")
    divNova.setAttribute("onclick", "sumir()");
    var conteudoNovo = x;
    divNova.appendChild(conteudoNovo); //adiciona o nó de texto à nova div criada document.body.appendChild(x);
    var divAtual = document.getElementById("imagens");// adiciona o novo elemento criado e seu conteúdo ao DOM
    document.body.insertBefore(divNova, divAtual);

    document.getElementById("body").style.filter = "brightness(30%)";
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});
function sumir(){
    $('#caixa>img').fadeOut(0);
    document.getElementById("body").style.filter = "brightness(100%)";
}


$('#subcategoria2 li').click(function () {
    const url = this.id;
  
    preco = $(this).attr('data-preco');
    nomeProduto = $(this).attr('data-nome');

    document.getElementById("nomeItem").innerHTML = nomeProduto;
});

function Calcula() {
    var x = document.getElementById("valorProduto").value;
    console.log(x);
    y = x * preco;
    console.log(preco);
    
    document.getElementById("exibir").innerHTML = "R$ " + y;
}


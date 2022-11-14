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

    var x = document.createElement("IMG");
    x.setAttribute("src", caminho);
    x.setAttribute("id", "imggrande");
    document.body.appendChild(x);
});




function CalculaBruscheta1(brusQt1) {
    var x = document.getElementById("brusQt1").value;
    y = x * 19.99
    document.getElementById("exibirBrusc1").innerHTML = "R$ " + y;
}
function CalculaBruscheta2(brusQt2) {
    var x = document.getElementById("brusQt2").value;
    y = x * 32.50
    document.getElementById("exibirBrusc2").innerHTML = "R$ " + y;
}
function CalculaBruscheta3(brusQt3) {
    var x = document.getElementById("brusQt3").value;
    y = x * 51.30
    document.getElementById("exibirBrusc3").innerHTML = "R$ " + y;
}


function CalculaMacarrao1(MussQt1) {
    var x = document.getElementById("MussQt1").value;
    y = x * 19.99
    document.getElementById("exibirMuss1").innerHTML = "R$ " + y;
}
function CalculaMacarrao2(MussQt2) {
    var x = document.getElementById("MussQt2").value;
    y = x * 32.50
    document.getElementById("exibirMuss2").innerHTML = "R$ " + y;
}
function CalculaMacarrao3(MussQt3) {
    var x = document.getElementById("MussQt3").value;
    y = x * 51.30
    document.getElementById("exibirMuss3").innerHTML = "R$ " + y;
}

function CalculaTudo(MussQt1, MussQt2, MussQt3) {
    var a = document.getElementById("MussQt3").value;
    var b = document.getElementById("MussQt2").value;
    var c = document.getElementById("MussQt1").value;

    y = a + b + c
    document.getElementById("exibirCalculo").innerHTML = "R$ " + y;
}

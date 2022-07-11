//Função para aparecer tela de login
$('.parteinterna>img, .parteinterna2>img').click(function(foto){
    id = $(this).attr('alt');
    $(id).fadeIn(1000);
});

$('.imggrande>img').click(function(){
    $(this).fadeOut(1000);
});

function login() {
     $('#fundologin').fadeToggle(1000);
}
$(document).ready(function(){
    $("#inserir").click(function(){
      var ing = document.getElementById("txtIngredientes").value;
      
      $("ol").append("<li>" + ing + "</li>" );
      
    });
  });

           
// Login
function entrar(){
    var x = document.getElementById("Login").value;
    var y = document.getElementById("Senha").value;

    a = "joao";
    b = "1234";

    c = "daniel";
    d = "456";

    if(x == a && y == b ){
        alert("Login efetuado");
        window.location.href = "intranetFunc.html";
    } else if(x == c && y == d){
        alert("Acesso efetuado")
        window.location.href = "intranetCli.html";
    }else{
        alert("Email ou senha errada");
        location.reload();
    }
}
function cadastrar(){
    window.location.href = "cadastro.html";
}

function sair(){
        alert("Até logo !")
        window.location.href = "inicio.html";
    }
    function esquecisenha(){
        window.location.href = "RecSenha.html";

    }


/*Função para sumir/aparecer barra de menu*/
const navSlide = () =>  {
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.nav-links');
    const linha1 = document.querySelector('.linha1');
    const linha2 = document.querySelector('.linha2');
    const linha3 = document.querySelector('.linha3');
    const links = document.querySelectorAll('.nav-links li');
 

    burger.addEventListener('click', () => {
        menu.classList.toggle('nav-active');
        linha1.classList.toggle('linha1-active');
        linha2.classList.toggle('linha2-active');
        linha3.classList.toggle('linha3-active');

        links.forEach(link => {
            link.classList.toggle('active');
        });


    });
}
navSlide();
//botoes do campo de opçoes, abaixo, bruschetta
function addBrusctra(){
    $('#BruschettaTradicional').toggle(600);
}
function addBruscbrie(){
    $('#Bruschettabrie').toggle(600);
}
function addBruscmuss(){
    $('#BruschettaMussarela').toggle(600);
}

//abaixo macarrao
function addMacEsp(){
    $('#MacarraoEspaguete').toggle(600);
}
function addMacMuss(){
    $('#MacarraoMussarela').toggle(600);
}
function addMacCac(){
    $('#MacarraoCachos').toggle(600);
}

/*Faz aparecer a nav dos categorias*/
function viewsub1() {
    $('#subcategoria1').fadeToggle(600);
}
function viewsub2() {
    $('#subcategoria2').fadeToggle(1000);
}
function viewsub3() {
    $('#subcategoria3').fadeToggle(1000);
}
function viewsub4() {
    $('#subcategoria4').fadeToggle(1000);
}

function CalculaBruscheta1(brusQt1){
    var x = document.getElementById("brusQt1").value;
    y = x * 19.99
    document.getElementById("exibirBrusc1").innerHTML = "R$ " + y;
}   
function CalculaBruscheta2(brusQt2){
    var x = document.getElementById("brusQt2").value;
    y = x * 32.50
    document.getElementById("exibirBrusc2").innerHTML = "R$ " + y;
}
function CalculaBruscheta3(brusQt3){
    var x = document.getElementById("brusQt3").value;
    y = x * 51.30
    document.getElementById("exibirBrusc3").innerHTML = "R$ " + y;
} 


function CalculaMacarrao1(MussQt1){
    var x = document.getElementById("MussQt1").value;
    y = x * 19.99
    document.getElementById("exibirMuss1").innerHTML = "R$ " + y;
}   
function CalculaMacarrao2(MussQt2){
    var x = document.getElementById("MussQt2").value;
    y = x * 32.50
    document.getElementById("exibirMuss2").innerHTML = "R$ " + y;
}
function CalculaMacarrao3(MussQt3){
    var x = document.getElementById("MussQt3").value;
    y = x * 51.30
    document.getElementById("exibirMuss3").innerHTML = "R$ " + y;
} 

function CalculaTudo(MussQt1,MussQt2,MussQt3){
    var a = document.getElementById("MussQt3").value;
    var b = document.getElementById("MussQt2").value;
    var c = document.getElementById("MussQt1").value;

    y = a+b+c
    document.getElementById("exibirCalculo").innerHTML = "R$ " + y;
}
// Inserir novo produto



// $('body').ready(function(e){
//     $('.imggrande').hide(0);
//     $('#img1G').show(0)
    
//     $('#imgmenor').click(function(x){
//         console.log(this)
        
//         alt = $(this).attr('alt');
//        $('.imggrande ').hide(1000); 
//         $(alt).show(1000);
//     });
//     });
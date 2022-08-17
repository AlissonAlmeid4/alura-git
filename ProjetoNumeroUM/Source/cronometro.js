var deadline = new Date("jan 15, 2023 12:30:00").getTime();
  
var x = setInterval(function() {
  
var now = new Date().getTime();
var tempo = deadline - now;
var days = Math.floor(tempo / (1000 * 60 * 60 * 24));
var hours = Math.floor((tempo%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((tempo % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((tempo % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days ;
document.getElementById("hour").innerHTML =hours;
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (tempo < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "TIME UP";
        document.getElementById("day").innerHTML ='0';
        document.getElementById("hour").innerHTML ='0';
        document.getElementById("minute").innerHTML ='0' ; 
        document.getElementById("second").innerHTML = '0'; }
}, 1000);
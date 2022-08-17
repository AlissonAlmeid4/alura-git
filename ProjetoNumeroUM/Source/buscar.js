
document.querySelectorAll("button").forEach( function(button) {
    
    button.addEventListener("click", function(event) {
    const el = event.target || event.srcElement;
    const id = el.id;
    
    var a = "https://www.zoom.com.br/search?q=";
    var busca = a.concat(id);

    window.open(busca, "_blank" );
  });
  
});
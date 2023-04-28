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
};
navSlide();
$('body').ready(function(e){
$('.grd img').hide(0);
$('#foto1').show(0)

$('.peq img').click(function(x){
    console.log(this)
    
    alt = $(this).attr('alt');
   $('.grd img').hide(1000); 
    $(alt).show(1000);
});
});

/* Portifolio */

document.addEventListener('DOMContentLoaded', function() {
    var stream = document.querySelector('.gallery__stream');
    var items = document.querySelectorAll('.gallery__item');
    
    var prev = document.querySelector('.gallery__prev');
    prev.addEventListener('click', function() {
      stream.insertBefore(items[items.length - 1], items[0]);
      items = document.querySelectorAll('.gallery__item');
    });
    
    var next = document.querySelector('.gallery__next');
    next.addEventListener('click', function() {
      stream.appendChild(items[0]);
      items = document.querySelectorAll('.gallery__item');
    });
  });
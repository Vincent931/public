/****************************Ajout favori***********************/
let tab2 = document.getElementsByClassName('bouton-prefere2');


     
     let input2 = document.getElementById('valid');
     let button2 = document.getElementById('bouton');

     button2.addEventListener("click", function() {
          
          let val2 = input2.value;
          query2(val2);
          alert('Vous avez ajouté cette annonce dans vos favoris !');
     })


let query2 = async (val2) => {
    return await fetch(`./index.php?action=add-favori&id=${val2}`);
}
/*****************carousel****************************/
$(document).ready(function(){
	$('.slider2').slick({
	  speed: 300,
	  centerMode: true,
	  centerPadding: '0px',
	  rtl: true,
	  lazyLoad: 'ondemand',
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 4,
	  arrows: true,
	  dots: true,
	  appendArrows:$('.arrow2'),
	  prevArrow:$('.prev2'),
	  nextArrow:$('.aft2'),
	  appendDots:$('.points2'),
	  dotsClass:'points2'
	})
});
/***********************Tweeter (footer)**********************************/
window.twttr = (function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0],
     t = window.twttr || {};
     if (d.getElementById(id)) return t;
     js = d.createElement(s);
     js.id = id;
     js.src = "https://platform.twitter.com/widgets.js";
     fjs.parentNode.insertBefore(js, fjs);
     t._e = [];
     t.ready = function(f) {
     t._e.push(f);
     };
return t;
}(document, "script", "twitter-wjs"));
/************************header**********************************************/
window.addEventListener('scroll', function (){
     let header = document.querySelector('.bandeau');
     header.classList.toggle('scrollAdd', window.scrollY > 0);
     let banner = document.querySelector('.div_banner');
     banner.classList.toggle('scrollAdd', window.scrollY > 0);
     let ul = document.querySelector('ul');
     ul.classList.toggle('scrollAdd', window.scrollY > 0);
     let slogan = document.querySelector('.slogan');
     slogan.classList.toggle('scrollAdd', window.scrollY > 0);
})
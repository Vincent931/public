/**********************************carousel********************/
$(document).ready(function(){
	$('.slider').slick({
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
	  appendArrows:$('.arrow'),
	  prevArrow:$('.prev'),
	  nextArrow:$('.aft'),
	  appendDots:$('.points'),
	  dotsClass:'points'
	})
});
/***********************************tweeter.js*****************/
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
/**********************************header.js*******************/
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
/***************************appear scroll*********************/
const ratio=.1;
const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}
/**********************************************************************/
/* apparait de la gauche*/
const handleIntersectL = function(entries,observerL){
	entries.forEach(function(entry){
		if(entry.intersectionRatio > ratio){
			entry.target.classList.add('reveal-visibleL');
			observerL.unobserve(entry.target);
		}
	})
}

const observerL = new IntersectionObserver(handleIntersectL, options);

document.querySelectorAll('.revealL').forEach(function(l){
	observerL.observe(l);
})

/***********************************************************************/
/*apparait de la droite*/
const handleIntersectR = function(entries,observerR){
	entries.forEach(function(entry){
		if(entry.intersectionRatio > ratio){
			entry.target.classList.add('reveal-visibleR');
			observerR.unobserve(entry.target);
		}
	})
}

const observerR = new IntersectionObserver(handleIntersectR, options);

document.querySelectorAll('.revealR').forEach(function(r){
	observerR.observe(r);
})

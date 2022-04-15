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

/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*===== REMOVE MENU MOBILE =====*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*===== SCROLL SECTIONS ACTIVE LINK =====*/
const sections = document.querySelectorAll('section[id]')

window.addEventListener('scroll', scrollActive)

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active__menu')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active__menu')
        }
    })
}

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})



// https://stackoverflow.com/questions/7083693/detect-if-page-has-finished-loading
window.onload = function () { 


    // /*SCROLL HOME*/
    // sr.reveal('.home__title', {})
    // sr.reveal('.home__title__mobile', {})
    // sr.reveal('.home__scroll', {delay: 200})
    // sr.reveal('.home__scroll__mobile', {delay: 200})
    // sr.reveal('.bg-mobile', {delay: 200})
    // // sr.reveal('.home__img', {origin:'right', delay: 400})
    // sr.reveal('.right', {origin:'right', delay: 400})

    // /*SCROLL ABOUT*/
    // sr.reveal('.about__img', {delay: 500})
    // sr.reveal('.about__subtitle', {delay: 300})
    // sr.reveal('.about__profession', {delay: 400})
    // sr.reveal('.about__text', {delay: 500})
    // sr.reveal('.about__social-icon', {delay: 600, interval: 200})

    // /*SCROLL SKILLS*/
    // sr.reveal('.skills__subtitle', {})
    // sr.reveal('.skills__name', {distance: '20px', delay: 50, interval: 100})
    // sr.reveal('.skills__img', {delay: 400})

    // /*SCROLL PORTFOLIO*/
    // sr.reveal('.portfolio__img', {interval: 200})

    // /*SCROLL CONTACT*/
    // sr.reveal('.contact__subtitle', {})
    // sr.reveal('.contact__text', {interval: 200})
    // sr.reveal('.contact__input', {delay: 400})
    // sr.reveal('.contact__button', {delay: 600})


};


/*===== POP UP/MODAL =====*/

function toggle(){
    var blur = document.getElementById('portfolio');
    blur.classList.toggle('active')

    var popup = document.getElementById('popup');
    popup.classList.toggle('active')
}


function toggle2(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup2');
    popup2.classList.toggle('active2')
}


function toggle3(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup3');
    popup2.classList.toggle('active2')
}

function toggle4(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup4');
    popup2.classList.toggle('active2')
}


function toggle5(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup5');
    popup2.classList.toggle('active2')
}

function toggle6(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup6');
    popup2.classList.toggle('active2')
}

function toggle7(){
    var blur2 = document.getElementById('portfolio');
    blur2.classList.toggle('active2')

    var popup2 = document.getElementById('popup7');
    popup2.classList.toggle('active2')
}

// https://codepen.io/ptamaro/pen/YQWMEW
// window.onload = function() {

//     var blur = document.getElementById('blur');
//     blur.classList.toggle('active')

//     var popup = document.getElementById('popup');
//     popup.classList.toggle('active')


// };

/*===== POP UP/MODAL =====*/


/*===== PRELOADER =====*/


// https://stackoverflow.com/questions/32755219/execute-js-function-after-some-time-of-page-load
var loader = document.getElementById("preloader");
var foundationalcontainer = document.getElementById("container__prime");

var toppage = document.getElementById("top-page");
var myFunc = function() {
    loader.style.display = "none";   
    toppage.style.display = "none";    
    foundationalcontainer.style.display = "block";   
 
    // loader.style.zIndex = "10";
       /*SCROLL HOME*/
       sr.reveal('.home__title', {})
       sr.reveal('.home__title__mobile', {})
       sr.reveal('.home__scroll', {delay: 200})
       sr.reveal('.home__scroll__mobile', {delay: 200})
       sr.reveal('.bg-mobile', {delay: 200})
       // sr.reveal('.home__img', {origin:'right', delay: 400})
       sr.reveal('.right', {origin:'right', delay: 400})
   
       /*SCROLL ABOUT*/
       sr.reveal('.about__img', {delay: 500})
       sr.reveal('.about__subtitle', {delay: 300})
       sr.reveal('.about__profession', {delay: 400})
       sr.reveal('.about__text', {delay: 500})
       sr.reveal('.about__social-icon', {delay: 600, interval: 200})
   
       /*SCROLL SKILLS*/
       sr.reveal('.skills__subtitle', {})
       sr.reveal('.skills__name', {distance: '20px', delay: 50, interval: 100})
       sr.reveal('.skills__img', {delay: 400})
   
       /*SCROLL PORTFOLIO*/
       sr.reveal('.portfolio__img', {interval: 200})
   
       /*SCROLL CONTACT*/
    //    sr.reveal('.contact__subtitle', {})
    //    sr.reveal('.contact__text', {interval: 200})
    //    sr.reveal('.contact__input', {delay: 400})
    //    sr.reveal('.contact__button', {delay: 600})

    sr.reveal('.list-item', {interval: 100})
    sr.reveal('.container', {interval: 100})
    sr.reveal('.contact__header', {interval: 500})
    sr.reveal('.contact-text', {distance: '20px', delay: 50, interval: 100})
    sr.reveal('.jamaican__flag', {interval: 500})
    sr.reveal('.contact__input', {delay: 900})
    sr.reveal('.contact__button', {delay: 1100})

    sr.reveal('.footer section', {delay: 300, interval: 200})
    sr.reveal('.footer__data', {delay: 300, interval: 200})

   
  }
window.addEventListener("load", function () {
    setTimeout(myFunc, 3500);
    // myFunc();
})


/*===== PRELOADER =====*/



var topPage = document.getElementById(`top-page`)
window.onscroll = () => {
window.scrollY > 300
    ? (topPage.style.display = `block`)
    : (topPage.style.display = `none`)
}

function topPageScroll(){
  var current = document.getElementsByClassName("active__menu");
  current[0].className = current[0].className.replace("active__menu","");
  var element = document.getElementById("myDIV");
  element.classList.add("active__menu");
}

var topPageMenuRemove = document.getElementById(`top-page`)
topPageMenuRemove.onclick = () => {
  topPageScroll();
  window.scrollTo({ top: 0, behavior: 'smooth'
  })
}



//kjo per me ta qit menu anash
let menu = document.querySelector('#menu-icon'); 
let navbar = document.querySelector('.navbar');

menu.onclick = () => { 
    menu.classList.toggle('bx-x'); 
    navbar.classList.toggle('active');
}

//per me ta hjek navbar on scroll
window.onscroll = () => {
    menu.classList.remove('bx-x'); 
    navbar.classList.remove('active');
}


//per me i bo pics me u shfaq ashtu si prej nalt
const sr = ScrollReveal ({
    distance: '60px', 
    duration: 2500,
    reset: true 
})

sr.reveal('.home-text',{delay:200, origin: 'top' }); 
sr.reveal('.home-img', {delay:400, origin: 'top'});
sr.reveal('.about, .services, .cta, .resume, .contact, .copyright', {delay : 200, origin: 'top'})
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    
    burger.addEventListener('click',() => {
        // Toggle Nav
        nav.classList.toggle('nav-active');
        // Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 + 0.2}s`;
            }
        });
        // Burger Animation
        burger.classList.toggle('toggle');
    });
};

navSlide();

// document.getElementById('scrollIntroForm').addEventListener('click',()=>{
//     document.getElementById('introForm').scrollIntoView();
// });


// $("#scrollIntroForm").click(function(e) {
//     console.log('trigger');
//     e.preventDefault();
//     $('body, html').animate({
//         scrollTop: $("#introForm").offset().top
//     }, 1000);
//     console.log('trigger too');
// });
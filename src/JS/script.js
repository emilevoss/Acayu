/* Scroll to sections from menu */

const sectionOne = document.querySelector('.header-section');

const options = {};

const observer = new IntersectionObserver(function (entries, observer) {

    entries.forEach(entry => {
        console.log(entry);
    });

}, options);

observer.observe(sectionOne);
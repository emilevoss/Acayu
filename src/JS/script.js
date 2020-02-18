/* Scroll to sections from menu */

const headersection = document.querySelector('.header-section');
const sectionOne = document.querySelector('.parent-container-2');

const sectionOneOptions = {};

const sectionOneObserver = new IntersectionObserver(function (entries, sectionOneObserver) {

    entries.forEach(entry => {
        if (!entry.isIntersecting){

        }
    });

}, sectionOneOptions);

sectionOneObserver.observe(sectionOne)

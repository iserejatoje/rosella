$(function () {
    console.log('init')

    function initHeaderEvents() {
        $(window).scroll(function (e) {
            if ($(window).scrollTop() >= 90) {
                $('header').addClass('small');
            } else {
                $('header').removeClass('small');
            }
        })
    }

    const sections = document.querySelectorAll('.service');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.5,
    });
    sections.forEach((section) => {
        observer.observe(section);
    });

    const sectionsFooter = document.querySelectorAll('.footer .page');
    const observerFooter = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.5,
    });
    sectionsFooter.forEach((section) => {
        observerFooter.observe(section);
    });

    initHeaderEvents();
})
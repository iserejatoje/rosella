$(function () {
    console.log('init')

    if (typeof Swiper !== 'undefined') {
        const swiper = new Swiper('.partners-slider .swiper', {
            loop: true,
            maxBackfaceHiddenSlides: 5,
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 5,
            speed: 800,
            navigation: {
                nextEl: '.partners-slider .next',
                prevEl: '.partners-slider .prev',
            },
        })
    }

    const phoneMask = document.querySelectorAll('[type="tel"]')
    phoneMask.forEach(element => IMask(element, {
        mask: '{61} (00) 0000 0000'
    }))

    $('.cart-icon').click(function () {
        $(this).next().toggleClass('cart-open');
        return false
    })

    $('.faq-button').click(function () {
        $(this).next().slideToggle(300);
        $(this).toggleClass('open');
        return false
    })

    $('.cart-close').click(function () {
        $('.cart-content').removeClass('cart-open');
    })

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.cart-content').length) {
            $('.cart-content').removeClass('cart-open');
        }
    });

    $('.cart-remove').click(function () {
        let $cart = $(this).parents('.cart-item');
        let $items = $('.cart-bottom .cart-item');

        let items_length = $items.length;
        if (items_length < 2) {
            $('.header .button--subtotal').hide()
        }
        $(this).parents('.cart-item').slideUp(300, function () {
            let items_length = $items.length;
            if (items_length < 2) {
                $('.header .cart-bottom').html('<span style="opacity: .5; display: block;">Cart is empty</span>')
            }

            $cart.remove();
            let items_length2 = $('.cart-bottom .cart-item').length;
            $('.cart-counter span').html('(' + items_length2 + ')');
            $('.cart-count').html(items_length2);


        })
        return false
    })

    $('.cart-amount .plus').click(function () {
        $(this).parents('.cart-amount').find('.cart-input').get(0).value++
    })

    $('.cart-amount .minus').click(function () {
        if ($(this).parents('.cart-amount').find('.cart-input').val() > 1)
            $(this).parents('.cart-amount').find('.cart-input').get(0).value--
    })

    function initHeaderEvents() {
        $(window).scroll(function (e) {
            if ($(window).scrollTop() >= 90) {
                $('header').addClass('small');
            } else {
                $('header').removeClass('small');
            }
            if ($(window).scrollTop() >= 10) {
                $('.header-faq, .header-blog, .header-service').addClass('header--blur');
            } else {
                $('.header-faq, .header-blog, .header-service').removeClass('header--blur');
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

    const sectionsFooter = document.querySelectorAll('.footer .seo-page');
    const observerFooter = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.7,
    });
    sectionsFooter.forEach((section) => {
        observerFooter.observe(section);
    });

    const sectionsAnimation = document.querySelectorAll('.faqs .faq-item, .article-list .article');
    const observerAnimation = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.4,
    });
    sectionsAnimation.forEach((section) => {
        observerAnimation.observe(section);
    });


    const imageRowAnimation = document.querySelectorAll('.images-grid .row');
    const observerImageRowAnimation = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.3,
    });
    imageRowAnimation.forEach((section) => {
        observerImageRowAnimation.observe(section);
    });

    initHeaderEvents();
})
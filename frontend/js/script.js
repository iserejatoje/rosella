$(function () {
    console.log('init')

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
                $('.header-faq').addClass('header--blur');
            } else {
                $('.header-faq').removeClass('header--blur');
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

    const sectionsFaq = document.querySelectorAll('.faqs .faq-item');
    const observerFaq = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.6,
    });
    sectionsFaq.forEach((section) => {
        observerFaq.observe(section);
    });

    initHeaderEvents();
})
$(function () {
    console.log('init')

    $('.cart-icon').click(function () {
        $(this).next().toggleClass('cart-open');
        return false
    })

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.cart-content').length) {
            $('.cart-content').removeClass('cart-open');
        }
    });

    $('.cart-remove').click(function () {
        let $cart = $(this).parents('.cart-item');
        $(this).parents('.cart-item').slideUp(300, function () {
            $cart.remove();
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
        threshold: 0.7,
    });
    sectionsFooter.forEach((section) => {
        observerFooter.observe(section);
    });

    initHeaderEvents();
})
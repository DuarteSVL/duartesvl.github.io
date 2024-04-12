(function ($) {
    "use strict"; // Modo de funcionamento restrito para o JavaScript

    // Iniciar a biblioteca WOW.js para animações baseadas no scroll
    new WOW().init();

    // Função para esconder o spinner após um determinado período de tempo
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Navbar Fixa - torna a barra de navegação fixa quando o utilizador rola a página
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#navbar').addClass('').css('top', '0');
        } else {
            $('#navbar').removeClass('shadow-sm').css('top', '-100px');
        }
    });

    // Botão "Voltar ao Topo" - torna o botão visível quando o utilizador rola a página para baixo e regressa ao topo quando clicado
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 500); // Alteração para 500 milissegundos (0.5 segundos)
        return false;
    });

    // Carrossel de noticias -
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        }
    });

    //Carousel fotos instalações
    $(document).ready(function () {
        $(".instalacao-carousel").owlCarousel({
        autoplay: false,
        items: 1, // Numero de intens a mostrar
        loop: true,
        margin: 30, // margem entre itens
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsive: {
            0: {
            items: 1,
            },
            576: {
            items: 2,
            },
            992: {
            items: 3,
            },
        },
        });
    });

})(jQuery); // Fim do código, passando jQuery como parâmetro para a função anónima


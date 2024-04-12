// Initiate the wowjs
new WOW().init();

// Spinner
var spinner = function () {
  setTimeout(function () {
    if ($("#spinner").length > 0) {
      $("#spinner").removeClass("show");
    }
  }, 1);
};
spinner();

/// Navbar Fixa - torna a barra de navegação fixa quando o utilizador faz scroll na página
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $("#navbar").addClass("").css("top", "0");
  } else {
    $("#navbar").removeClass("shadow-sm").css("top", "-100px");
  }
});

// Back to top button
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $(".back-to-top").fadeIn("slow");
  } else {
    $(".back-to-top").fadeOut("slow");
  }
});
$(".back-to-top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
  return false;
});

/*//Header carousel ATUALIZADO
  $(document).ready(function () {
    $(".header-carousel").owlCarousel({
      autoplay: false,
      autoplayTimeout: 5000, // Autoplay interval in milliseconds
      autoplayHoverPause: true,
      smartSpeed: 1500, // Transition speed
      items: 1, // Show one item at a time
      dots: false, // Show pagination dots
      loop: true, // Infinite loop
      nav: true, // Show navigation arrows
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: {
          margin: 15, // Adjust margin for smaller screens
        },
        768: {
          margin: 30, // Adjust margin for medium screens
        },
        992: {
          margin: 60, // Adjust margin for large screens
        },
      },
    });
  });*/

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

// Carousel fotos galeria
$(document).ready(function () {
  $(".galeria-carousel").owlCarousel({
    autoplay: false,
    items: 1, // Número de itens a mostrar
    loop: true,
    margin: 30, // Margem entre itens
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

// Carrossel  Cantinho Carousel
$(".cantinho-carousel").owlCarousel({
  autoplay: true,
  smartSpeed: 1000,
  margin: 24,
  dots: false,
  loop: true,
  nav: true,
  navText: [
    '<i class="bi bi-arrow-left"></i>',
    '<i class="bi bi-arrow-right"></i>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    992: {
      items: 2,
    },
  },
});

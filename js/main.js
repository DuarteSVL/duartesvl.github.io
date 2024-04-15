(function ($) {
  ("use strict"); // Modo de funcionamento restrito para o JavaScript

  // Navbar Fixa - torna a barra de navegação fixa quando o utilizador rola a página
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $("#navbar").addClass("").css("top", "0");
    } else {
      $("#navbar").removeClass("shadow-sm").css("top", "-100px");
    }
  });

  // Botão "Voltar ao Topo" - torna o botão visível quando o utilizador rola a página para baixo e regressa ao topo quando clicado
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500); // Alteração para 500 milissegundos (0.5 segundos)
    return false;
  });

  // Carousel de noticias
  $(".owl-carousel.noticias-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000, // Tempo de reprodução de cada slide em milissegundos
    autoplayHoverPause: true, // Pausa a reprodução do carrossel quando o mouse está sobre ele
    smartSpeed: 1000, // Velocidade de animação em milissegundos
    margin: 24, // Margem entre os itens do carrossel
    dots: false, // Oculta os pontos de navegação
    loop: true, // Ativa o modo de loop
    nav: true, // Mostra a navegação
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ], // Texto para os botões de navegação
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
    }, // Responsividade do carrossel
  });

  // Carousel do Cantinho
  $(".owl-carousel.cantinho-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000, // Tempo de reprodução de cada slide em milissegundos
    autoplayHoverPause: true, // Pausa a reprodução do carrossel quando o mouse está sobre ele
    smartSpeed: 1000, // Velocidade de animação em milissegundos
    margin: 24, // Margem entre os itens do carrossel
    dots: false, // Oculta os pontos de navegação
    loop: true, // Ativa o modo de loop
    nav: true, // Mostra a navegação
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ], // Texto para os botões de navegação
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
    }, // Responsividade do carrossel
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
})(jQuery); // Fim do código, passando jQuery como parâmetro para a função anónima

// *********************************************************************************************
// *********************************************************************************************
//Function Submenus das páginas de Contactos e das Ementas

function mudarMenu(id) {
  var submenu = document.getElementsByClassName("submenu");

  for (jar of submenu) {
    jar.style.display = "none";
  }

  document.getElementById(id).style.display = "block";

  //Este código muda a cor do botão selecionado nos submenus para dar relevância
  const btnElList = document.querySelectorAll(".btn");

  const currentBtn = document.querySelector(".btn");

  btnElList.forEach((btnEl) => {
    btnEl.addEventListener("click", () => {
      document.querySelector(".visited")?.classList.remove("visited");
      btnEl.classList.add("visited");
    });
  });

  currentBtn.add("visited");
}

// *********************************************************************************************
// *********************************************************************************************
//Script Filtros da página de Noticias e Eventos

$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $("#navbar").addClass("").css("top", "0");
  } else {
    $("#navbar").removeClass("shadow-sm").css("top", "-100px");
  }
});

const currentUrl = new URL(window.location.href);
const isRedirected = !!currentUrl.searchParams.get("r");

if (!isRedirected) {
  fetch(window.location.href, {
    method: "HEAD",
  }).then((response) => {
    if (response.status !== 404) return;

    const redirectUrl = new URL(
      [window.location.origin, "/posts", window.location.pathname].join("")
    );
    redirectUrl.searchParams.set("r", 1);
    window.location.href = redirectUrl.href;
  });
}

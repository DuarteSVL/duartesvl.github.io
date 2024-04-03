// Function to ensure code execution after DOM content is fully loaded
function domContentLoaded(callback) {
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", callback);
  } else {
    callback();
  }
}

// Function to initialize Swiper and related functionality after DOM content is fully loaded
domContentLoaded(function () {
  // Função para inicializar o Swiper e funcionalidades relacionadas
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: getSlidesPerView(), // valor inicial baseado no tamanho do ecrã
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Função para calcular slidesPerView com base no screen size
  function getSlidesPerView() {
    if (window.matchMedia("(max-width: 768px)").matches) {
      return 1; // 1 slide per view for screens <= 576px
    } else if (window.matchMedia("(min-width: 992px)").matches) {
      return 3; // 3 slides per view for screens >= 992px
    } else {
      return 2; // Default value (2 slides per view)
    }
  }

  // Update dos slidesPerView
  window.addEventListener("resize", function () {
    // Update dos slidesPerView quando o numero de slides for menos de 3
    if (
      swiper.slides.length < 3 &&
      window.matchMedia("(min-width: 992px)").matches
    ) {
      swiper.params.slidesPerView = swiper.slides.length;
    } else {
      swiper.params.slidesPerView = getSlidesPerView();
    }
    swiper.update();
  });

  // Adicionar event listeners a cada swiper slide
  document.querySelectorAll(".swiper-slide").forEach(function (slide, index) {
    slide.addEventListener("click", function () {
      // Get the modal and modal image
      var modal = document.getElementById("myModal");
      var modalImg = document.getElementById("img01");
      var slides = document.querySelectorAll(".swiper-slide img");

      // Mostrar/ display do modal
      modal.style.display = "block";
      modalImg.src = this.querySelector("img").src;

      // Função para fechar o modal quando se carrega no "x"
      var span = document.getElementsByClassName("close")[0];
      span.onclick = function () {
        modal.style.display = "none";
      };

      // Função para lidar com a navegação no modal quando se carrega no botão "seguinte"
      var nextBtn = document.getElementById("nextBtn");
      nextBtn.onclick = function () {
        // Encontrar o index da imagem que esta a ser mostrada
        var currentIndex;
        slides.forEach(function (img, idx) {
          if (img.src === modalImg.src) {
            currentIndex = idx;
          }
        });

        // Determinar a imagem seguinte a mostrar
        var nextIndex = (currentIndex + 1) % slides.length;

        // Update da imagem do modal
        modalImg.src = slides[nextIndex].src;
      };

      // Função para lidar com a navegação no modal quando se carrega no botão "anterior"
      var prevBtn = document.getElementById("prevBtn");
      prevBtn.onclick = function () {
        // Encontrar o index da imagem que esta a ser mostrada
        var currentIndex;
        slides.forEach(function (img, idx) {
          if (img.src === modalImg.src) {
            currentIndex = idx;
          }
        });

        // Determinar a imagem anterior a mostrar
        var prevIndex = (currentIndex - 1 + slides.length) % slides.length;

        // Update da imagem do modal
        modalImg.src = slides[prevIndex].src;
      };
    });
  });
});

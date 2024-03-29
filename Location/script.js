var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });

window.onscroll = function () {
    let scrollPos = window.scrollY;
    let arrow = document.getElementById("arrow");
    if (scrollPos <= 3) {
        arrow.classList.add("fade-in");
        arrow.classList.remove("fade-out");
    } else {
        let arrow = document.getElementById("arrow");
        arrow.classList.remove("fade-in");
        arrow.classList.add("fade-out");
    }
};
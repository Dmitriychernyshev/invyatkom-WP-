// Slider's
$('.partner-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        arrows: false,
        dots: true,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('.reviews-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1
  });

// Burger
$(document).ready(function() {
  $('.navbar-toggler').click(function() {
    $('.navbar-toggler').toggleClass('open-menu');
    $('.navbar').toggleClass('border-b-gray');
  });
});
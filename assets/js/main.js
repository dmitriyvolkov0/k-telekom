$('.plans__carousel').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  infinity: false,
  responsive: [
    {
      breakpoint: 1990,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 1360,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});
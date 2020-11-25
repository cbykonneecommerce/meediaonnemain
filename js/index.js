$('.herobanners').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
      }
    }]

  });


  
$(".slick-prev.slick-arrow").html(`
<svg xmlns="http://www.w3.org/2000/svg" width="39.523" height="50.523" viewBox="0 0 39.523 50.523">
  <path fill="none" stroke="rgb(0,0,0)" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5" d="M27.76157527 11.76157527l-16 14 16 13"/>
</svg>

`);
$(".slick-next.slick-arrow").html(`
<svg xmlns="http://www.w3.org/2000/svg" width="39.523" height="50.523" viewBox="0 0 39.523 50.523">
  <path fill="none" stroke="rgb(0,0,0)" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5" d="M11.7615601 38.76156629l16.00001574-13.99998203-15.9999854-13.00001797"/>
</svg>

`);
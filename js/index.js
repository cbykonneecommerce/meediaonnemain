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

$('.screenbanners').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
  dots: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
      }
    }]

});


$("#investmedia").on("keyup", function (e) {

  var elemento = document.getElementById('investmedia');
  var valor = elemento.value;

  valor = valor + '';
  valor = parseInt(valor.replace(/[\D]+/g, ''));
  valor = valor + '';
  valor = valor.replace(/([0-9]{2})$/g, ",$1");

  if (valor.length > 6) {
    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, "$1,$2");
  }

  elemento.value = valor;

});

//mascara TEL

$("#telefone").on("keyup", function (e) {

  let tel = $(this).val();
  tel = tel.replace(/\D/g, "")
  tel = tel.replace(/^(\d)/, "($1")
  tel = tel.replace(/(.{3})(\d)/, "$1)$2")
  if (tel.length == 9) {
    tel = tel.replace(/(.{1})$/, "-$1")
  } else if (tel.length == 10) {
    tel = tel.replace(/(.{2})$/, "-$1")
  } else if (tel.length == 11) {
    tel = tel.replace(/(.{3})$/, "-$1")
  } else if (tel.length == 12) {
    tel = tel.replace(/(.{4})$/, "-$1")
  } else if (tel.length > 12) {
    tel = tel.replace(/(.{4})$/, "-$1")
  }
  $(this).val(tel);
});




$("#form-sender").click(() => {
  event.preventDefault()
  console.log("start")
  let formdata = {
    "apiKey": "1234",
    "company_name": $("#empresa").val(),
    "site": $("#site").val(),
    "name": $("#name").val(),
    "email": $("#email").val(),
    "phone_number": $("#telefone").val(),
    "page_views": $("#pgview").val(),
    "media_investment": $("#investmedia").val()
  }

  fetch('https://meediaonne.com/api/landing-page/store', {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(formdata)
  })
    .then(response => {
      return response.json()
    })
    .then(result => {
      console.log(result);
      alert("Dados enviados com sucesso!")
    })
    .catch(function (error) {
      console.log("Algo deu errado. Tente novamente.");
    });
})




$(".slick-prev.slick-arrow").html(`
<svg xmlns="http://www.w3.org/2000/svg" width="39.523" height="50.523" viewBox="0 0 39.523 50.523">
  <path fill="none" stroke="rgb(255,255,255)" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5" d="M27.76157527 11.76157527l-16 14 16 13"/>
</svg>

`);
$(".slick-next.slick-arrow").html(`
<svg xmlns="http://www.w3.org/2000/svg" width="39.523" height="50.523" viewBox="0 0 39.523 50.523">
  <path fill="none" stroke="rgb(255,255,255)" stroke-linecap="butt" stroke-linejoin="miter" stroke-width="5" d="M11.7615601 38.76156629l16.00001574-13.99998203-15.9999854-13.00001797"/>
</svg>

`);



$(".accordion-btn").click(function () {
  $(this).parent().toggleClass('changed');
})



$(".pills li").click(function () {
  let pill = $(this).attr("data-target");
  console.log(pill)
  $(".pills li").removeClass("selected")
  $(this).addClass("selected")

  switch (pill) {

    case "#pill1":
      $("#pill2").removeClass("show")
      $("#pill3").removeClass("show")
      break;

    case "#pill2":
      $("#pill1").removeClass("show")
      $("#pill3").removeClass("show")
      break;

    case "#pill3":
      $("#pill1").removeClass("show")
      $("#pill2").removeClass("show")
      break;
  }
})


$(".squares li").click(function () {
  let pill = $(this).attr("data-target");
  console.log(pill)
  $(".squares li").removeClass("selected")
  $(this).addClass("selected")

  switch (pill) {

    case "#square1":
      $("#square2").removeClass("show")
      $("#square3").removeClass("show")
      $("#square4").removeClass("show")
      $("#square5").removeClass("show")
      break;

    case "#square2":
      $("#square1").removeClass("show")
      $("#square3").removeClass("show")
      $("#square4").removeClass("show")
      $("#square5").removeClass("show")
      break;

    case "#square3":
      $("#square1").removeClass("show")
      $("#square2").removeClass("show")
      $("#square4").removeClass("show")
      $("#square5").removeClass("show")
      break;

    case "#square4":
      $("#square1").removeClass("show")
      $("#square2").removeClass("show")
      $("#square3").removeClass("show")
      $("#square5").removeClass("show")
      break;

    case "#square5":
      $("#square1").removeClass("show")
      $("#square2").removeClass("show")
      $("#square3").removeClass("show")
      $("#square4").removeClass("show")
      break;
  }
})
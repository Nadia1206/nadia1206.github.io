

$("#suitcase").click(function (event) {
  $.post("index.php", { refLink: "suitcase" }, function (data) {
    $("#info").html(data)
  });
});
$("#chest").click(function (event) {
  $.post("index.php", { refLink: "chest" }, function (data) {
    $("#info").html(data)
  });
});
$("#case").click(function (event) {
  $.post("index.php", { refLink: "case" }, function (data) {
    $("#info").html(data)
  });
});
$("#bag").click(function (event) {
  $.post("index.php", { refLink: "bag" }, function (data) {
    $("#info").html(data)
  });
});
$("#purse").click(function (event) {
  $.post("index.php", { refLink: "purse" }, function (data) {
    $("#info").html(data)
  });
});
$("#sl").click(function (event) {
  $.post("index.php", { refLink: "home" }, function (data) {
    $("#info").html(data)
  });
});
$("#suitcase_img").click(function (event) {
  $.post("index.php", { refLink: "suitcase" }, function (data) {
    $("#info").html(data)
  });
});
$("#chest_img").click(function (event) {
  $.post("index.php", { refLink: "chest" }, function (data) {
    $("#info").html(data)
  });
});
$("#case_img").click(function (event) {
  $.post("index.php", { refLink: "case" }, function (data) {
    $("#info").html(data)
  });
});
$("#bag_img").click(function (event) {
  $.post("index.php", { refLink: "bag" }, function (data) {
    $("#info").html(data)
  });
});
$("#purse_img").click(function (event) {
  $.post("index.php", { refLink: "purse" }, function (data) {
    $("#info").html(data)
  });
});
$("#home").click(function (event) {
  $.post("index.php", { refLink: "home" }, function (data) {
    $("#info").html(data)
  });
});
$("#sl").click(function (event) {
  $.post("index.php", { refLink: "sl" }, function (data) {
    $("#info").html(data)
  });
});
$('.sl').slick({
  autoplaySpeed: 1000,
  autoplay: true,
  arrows: true,
  cssEase: 'ease-in',
  asNavFor: '.sl2'
});
$('.sl2').slick({
  arrows: false,
  dots: true,
  slidesToShow: 6,
  centerPadding: '40px',
  asNavFor: '.sl',
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        dots: false
      }
    }
  ]
});





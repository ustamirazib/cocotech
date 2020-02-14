$(window).scroll(function() {
  var wScroll = $(this).scrollTop();

  $(".coco-title").css({
    transform: "translate(0px, " + wScroll / 30 + "%)"
  });
});

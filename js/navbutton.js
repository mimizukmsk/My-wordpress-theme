jQuery(function () {
  jQuery(".nav-btn__trigger").click(function () {
    jQuery(".nav-btn__trigger").toggleClass("active");
    jQuery(".header__nav").slideToggle();
  });
});
$(document).ready(function funkcje() {
  $(".wylogujButton").on("click", function () {
    window.open("wylogujsie.php", "_self");
  });

  var timeOutNow = 900000; //15min
  var timeOutTimer;

  $(window).on("mousemove", function () {
    clearTimeout(timeOutTimer);
    afk();
  });

  function afk() {
    timeOutTimer = setTimeout(auto_logout, timeOutNow);
  }

  function auto_logout() {
    window.open("czysc_koszyk.php", "_self");
  }
});

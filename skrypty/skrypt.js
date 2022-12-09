$(document).ready(function funkcje() {
  $(".wylogujButton").on("click", function () {
    window.open("wylogujsie.php", "_self");
  });

  $("body").on("mousemove", function () {
    var aktualny_czas = new Date();
    console.log(aktualny_czas);
  });
});

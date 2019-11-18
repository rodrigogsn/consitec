$(document).ready(function() {
  $(".menu > label").on("click", function(e) {
    $(this)
      .parent()
      .find(".submenu")
      .toggle("show");
  });
});

function openMobHeader() {
  let header_el = $(".header");
  header_el.toggleClass("visible");
}

$(document).ready(function() {
  $(".menu > li span").on("click", function(e) {
    $(".submenu li.selected").toggleClass("selected");

    if (
      $(".menu").find("span.selected").length &&
      $(".menu").find("span.selected")[0] != $(this)[0]
    ) {
      $(".menu")
        .find("span.selected")
        .toggleClass("selected")
        .parent()
        .find(".submenu")
        .toggle("show");
    }

    $(this)
      .toggleClass("selected")
      .parent()
      .find(".submenu")
      .toggle("show");

    if ($(this).html() === "CONTATO") {
      $("main").load(`./pages/contato.php`);
    }
  });

  $(".submenu li").on("click", function(e) {
    if (
      $(".menu li span.selected")
        .parent()
        .find(".submenu li.selected").length
    ) {
      $(".menu li span.selected")
        .parent()
        .find(".submenu li.selected")
        .toggleClass("selected");
    }
    $(this).toggleClass("selected");

    const file = $(this).attr("file");

    $("main").load(`./pages/${file}.php`);

    if (window.matchMedia("(max-device-width: 481px)").matches) {
      openMobHeader();
    }
  });
});

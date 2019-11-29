function ready_menu(page) {
  let isProject = false;
  let isContact = false;
  if (page == "projeto") {
    page = "projetos";
    isProject = true;
  } else if (page == "contato") {
    isContact = true;
  }

  let submenu_el = $(`.submenu li a[href="${page}"]`);
  let menu_el = submenu_el
    .closest("ul")
    .parent()
    .find("span");

  menu_el
    .toggleClass("selected")
    .parent()
    .find(".submenu")
    .css("display", "inherit");

  if (isContact) {
    $(`li.contato span`).toggleClass("selected");
  } else if (!isProject) {
    submenu_el.parent().toggleClass("selected");
  }
}

$(document).ready(function() {
  let path = window.location.pathname.split("/");
  let page = path[path.length - 1];

  ready_menu(page);

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
        .toggle(250);
    }

    $(this)
      .toggleClass("selected")
      .parent()
      .find(".submenu")
      .toggle(250);
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

    if (window.matchMedia("(max-device-width: 481px)").matches) {
      openMobileMenu();
    }
  });
});

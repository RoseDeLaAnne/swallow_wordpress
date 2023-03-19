jQuery(document).ready(function ($) {
    $(".header__menu-button").on("click", function () {
        $(".page").addClass("page_fixed");
        $(".modal_nav").addClass("modal_active");
        $(".header__menu-button").addClass("header__menu-button_inactive");
    });
    $(".modal__close-button_nav").on("click", function () {
        $(".page").removeClass("page_fixed");
        $(".modal_nav").removeClass("modal_active");
        $(".header__menu-button").removeClass("header__menu-button_inactive");
    });

    $(".button_floating-ready-to-help").on("click", function () {
        // $(".page").addClass("page_fixed");
        $(".modal_donate").addClass("modal_active");
        // $(".header__menu-button").addClass("header__menu-button_inactive");
    });
    $(".button_ready-to-help").on("click", function () {
        // $(".page").addClass("page_fixed");
        $(".modal_donate").addClass("modal_active");
        // $(".header__menu-button").addClass("header__menu-button_inactive");
    });
    $(".modal__close-button_donate").on("click", function () {
        // $(".page").removeClass("page_fixed");
        $(".modal_donate").removeClass("modal_active");
        // $(".header__menu-button").removeClass("header__menu-button_inactive");
    });
});

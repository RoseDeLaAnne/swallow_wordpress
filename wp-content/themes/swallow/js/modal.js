jQuery(document).ready(function ($) {
    $(".header__menu-button").on("click", function () {
        $(".page").addClass("page_fixed");
        $(".modal").addClass("modal_active");
        $(".header__menu-button").addClass("header__menu-button_inactive");
    });
    $(".modal__close-button").on("click", function () {
        $(".page").removeClass("page_fixed");
        $(".modal").removeClass("modal_active");
        $(".header__menu-button").removeClass("header__menu-button_inactive");
    });
});

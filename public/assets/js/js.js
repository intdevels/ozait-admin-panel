var $page = $("html, body");

function onEntry(e) {
    e.forEach((e => {
        e.isIntersecting && e.target.classList.add("element-show")
    }))
}

$('a[href*="#"]').click((function () {
    return $("#menu__toggle").prop("checked", !1), $page.animate({scrollTop: $($.attr(this, "href")).offset().top}, 400), !1
})), $(".multiple-items").slick({
    infinite: !0,
    dots: !1,
    slidesToScroll: 1,
    variableWidth: !0,
    autoplay: !0,
    autoplaySpeed: 2e3,
    arrows: !1,
    responsive: [{
        breakpoint: 600,
        settings: {centerMode: !0, centerPadding: "60px", slidesToShow: 1, slidesToScroll: 1, variableWidth: !1}
    }]
}), $(".responsive").slick({
    dots: !1,
    infinite: !0,
    autoplay: !0,
    speed: 300,
    variableWidth: !0,
    slidesToScroll: 1,
    arrows: !1,
    responsive: [{
        breakpoint: 1024,
        settings: {slidesToShow: 3, slidesToScroll: 1, infinite: !0, dots: !1}
    }, {breakpoint: 800, settings: {slidesToShow: 2, slidesToScroll: 1, infinite: !0, dots: !1}}, {
        breakpoint: 600,
        settings: {centerMode: !0, centerPadding: "60px", slidesToShow: 1, slidesToScroll: 1}
    }]
}), $(".center").slick({
    centerMode: !0,
    centerPadding: "60px",
    slidesToScroll: 1,
    variableWidth: !0,
    autoplay: !0,
    autoplaySpeed: 2e3,
    arrows: !1,
    responsive: [{breakpoint: 600, settings: {slidesToScroll: 1}}]
}), $(".questions_item").click((function () {
    $(this).hasClass("act") ? $(this).removeClass("act") : $(this).addClass("act")
}));
let options = {threshold: [.5]}, observer = new IntersectionObserver(onEntry, options),
    elements = document.querySelectorAll(".element-animation");
for (let e of elements) observer.observe(e);
$(".popup-open").click((function () {
    return $(".popup-fade").fadeIn(), !1
})), $(".popup-close").click((function () {
    return $(this).parents(".popup-fade").fadeOut(), !1
})), $(document).keydown((function (e) {
    27 === e.keyCode && (e.stopPropagation(), $(".popup-fade").fadeOut(), $(".popup-fade_2").fadeOut(), $(".popup-fade_3").fadeOut(), $(".popup-fade_4").fadeOut(), $(".popup-fade_5").fadeOut(), $(".popup-fade_6").fadeOut())
})), $(".popup-fade").click((function (e) {
    0 == $(e.target).closest(".popup").length && $(this).fadeOut()
})), $(".popup-open_2").click((function () {
    return $(".popup-fade_2").fadeIn(), !1
})), $(".popup-close_2").click((function () {
    return $(this).parents(".popup-fade_2").fadeOut(), !1
})), $(".popup-fade_2").click((function (e) {
    0 == $(e.target).closest(".popup_2").length && $(this).fadeOut()
})), $(".popup-open_3").click((function () {
    return $(".popup-fade_3").fadeIn(), !1
})), $(".popup-close_3").click((function () {
    return $(this).parents(".popup-fade_3").fadeOut(), !1
})), $(".popup-fade_3").click((function (e) {
    0 == $(e.target).closest(".popup_3").length && $(this).fadeOut()
})), $(".popup-open_4").click((function () {
    return $(".popup-fade_4").fadeIn(), !1
})), $(".popup-close_4").click((function () {
    return $(this).parents(".popup-fade_4").fadeOut(), !1
})), $(".popup-fade_4").click((function (e) {
    0 == $(e.target).closest(".popup_4").length && $(this).fadeOut()
})), $(".popup-open_5").click((function () {
    return $(".popup-fade_5").fadeIn(), !1
})), $(".popup-close_5").click((function () {
    return $(this).parents(".popup-fade_5").fadeOut(), !1
})), $(".popup-fade_5").click((function (e) {
    0 == $(e.target).closest(".popup_5").length && $(this).fadeOut()
})), $(".popup-open_6").click((function () {
    return $(".popup-fade_6").fadeIn(), !1
})), $(".popup-close_6").click((function () {
    return $(this).parents(".popup-fade_6").fadeOut(), !1
})), $(".popup-fade_6").click((function (e) {
    0 == $(e.target).closest(".popup_6").length && $(this).fadeOut()
}));
let typed = new Typed("#typed", {
    stringsElement: "#typed-strings",
    typeSpeed: 100,
    startDelay: 500,
    backSpeed: 50,
    loop: !0
});
$(".element").typed({
    typeSpeed: 0,
    backSpeed: 0,
    startDelay: 0,
    backDelay: 500,
    loop: !1,
    loopCount: !1,
    showCursor: !0,
    attr: null,
    callback: function () {
    }
});

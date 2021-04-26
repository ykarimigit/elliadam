"use strict";

var main = {
    init: function(){
        console.log("initialized");
    },
    categoryNavigation: function () {
        var navCategory             = $(".navigation-category-ul"),
            navCategoryItemTitle    = $(".navigation-category-item");

        navCategory.menuAim({
            activate: activateSubmenu,
            deactivate: deactivateSubmenu,
            exitMenu: deactivateCatNav
        });

        function activateSubmenu(navCatItem) {
            var navCategoryItem = $(navCatItem);
            navCategoryItem.addClass("is-active");
        }
        function deactivateSubmenu(navCatItem) {
            var navCategoryItem = $(navCatItem);
            navCategoryItem.removeClass("is-active");
        }
        function deactivateCatNav(navCat){
            var navCategoryItem = $("li", navCat);
            navCategoryItem.removeClass("is-active");
            return true;
        }

        // Prevent Click on Mobile & Toggle Menu on Mobile.
        function initCategoryMenu(){
            if (window.matchMedia("(min-width: 992px)").matches) { // Desktop
                navCategoryItemTitle.each(function(){
                    $(this).attr("href", $(this).attr("data-href"));
                });
            } else { // Mobile
                navCategoryItemTitle.each(function(){
                    $(this).attr("href", "javascript:;");
                });

                navCategoryItemTitle.on({
                    click: function(){
                        if($(this).parent().hasClass("is-active")){
                            $(this).parent().removeClass("is-active");
                        } else{
                            $(this).parent().addClass("is-active");
                        }
                    },
                });
            }
        }
        initCategoryMenu();

        var resizeRegulator;
        $(window).on("resize", function () {
            clearTimeout(resizeRegulator);
            resizeRegulator = setTimeout(function(){
                initCategoryMenu();
            }, 100);
        });
    },
    heroSlider: function (){
        var mySwiper = new Swiper('.js-hero-slider', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
            }
        })
    },
    cardSlider: function (){
        var mySwiper = new Swiper('.js-card-slider', {
            slidesPerView: 1,
            spaceBetween: 15,
            breakpoints: {
                // when window width is >= 320px
                480: {
                    slidesPerView: 2
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 3
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 4
                },
                // when window width is >= 1200PX
                1200: {
                    slidesPerView: 5
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        })
    },
    productSlider: function(){
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 3,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });
    },
    triggerCategoryNav: function (){
        var navigationCategory = $(".js-navigation-category"),
            buttonCategory = $(".js-button-category");

        buttonCategory.off().on({
            click: function () {
                if(navigationCategory.hasClass("is-active")){
                    navigationCategory.removeClass("is-active");
                } else{
                    navigationCategory.addClass("is-active");
                }

            }
        });
    },
    quantitySpinner: function(){
        $(".input-quantity").on({
            keyup: function () {
                var thisInput = $(this),
                    minValue = thisInput.data("minvalue"),
                    maxValue = thisInput.data("maxvalue");

                if (minValue) {
                    if (thisInput.val() < minValue) {
                        thisInput.val(minValue);
                    }
                } else {
                    if (thisInput.val() < 0) {
                        thisInput.val(0);
                    }
                }
                if (maxValue) {
                    if (thisInput.val() > maxValue) {
                        thisInput.val(maxValue);
                    }
                }
            }
        });
        $(".button-quantity").off().on({
            click: function (e) {
                e.preventDefault();

                var thisButton = $(this),
                    thisInput = $(this).siblings("input"),
                    minValue = thisInput.data("minvalue"),
                    maxValue = thisInput.data("maxvalue");
                if (thisButton.hasClass("quantity-increase")) {
                    thisInput.val(parseInt(thisInput.val()) + 1);
                } else if (thisButton.hasClass("quantity-decrease")) {
                    thisInput.val(parseInt(thisInput.val()) - 1);
                }

                if (minValue) {
                    if (thisInput.val() < minValue) {
                        thisInput.val(minValue);
                    }
                } else {
                    if (thisInput.val() < 0) {
                        thisInput.val(0);
                    }
                }
                if (maxValue) {
                    if (thisInput.val() > maxValue) {
                        thisInput.val(maxValue);
                    }
                }
            }
        });
    }
};


// Document.Ready
document.addEventListener("DOMContentLoaded", function() {
    main.init();
    main.categoryNavigation();
    main.heroSlider();
    main.cardSlider();
    main.productSlider();
    main.triggerCategoryNav();
    main.quantitySpinner();
});
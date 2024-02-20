document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initOverlay();
    this.initMenu();
    this.setMenuHeightOverflow();
    this.initMenuCatalogSubmenu();
    this.initBasicSlider();
    this.initSliders();
    this.initReadmore();
    this.initTooltips();
    this.initInputSearch();
    this.initTagbarSlider();
    this.initMaskedInput();
    this.initSwitchContent();
    this.initNotification();
};

// Initialization disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialization enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();

    function setHeaderScroll() {
        if ($(window).scrollTop() > 120) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialization menu call
application.prototype.initMenu = function () {
    const body = $('body');
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setCatalogClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setCatalogClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setCatalogClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
            body.removeClass('overflow-hidden');
        } else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
            body.addClass('overflow-hidden');
        }
    }

    function setCatalogClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        body.removeClass('overflow-hidden');
        $('.menu-catalog-header').removeClass('submenu');
        $('.overlay-transparent').remove();
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $("<div class='overlay-transparent'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setCatalogClose();
            }
        });
    }
};

// Initialization menu height overflow
application.prototype.setMenuHeightOverflow = function () {
    defineMenuOverflow();
    $(window).on('resize scroll', function () {
        defineMenuOverflow();
    });

    function defineMenuOverflow() {
        let viewportHeight = $(window).outerHeight() - $('.header').outerHeight();
        let menuHeight = $('.menu-catalog').outerHeight();

        if (menuHeight > viewportHeight) {
            $('.menu-catalog').addClass('menu-catalog-overflow');
        } else {
            $('.menu-catalog').removeClass('menu-catalog-overflow');
        }
    }
};

// Initialization menu catalog behavior
application.prototype.initMenuCatalogSubmenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalogTitle = $('[data-catalog-title]');
    const rootItem = $('.menu-catalog-root-link');
    const rootSubmenuItem = $('.menu-catalog-submenu-section');

    catalogSpoiler.on('click', function (e) {
        const defaultRootItem = $(".menu-catalog-root-link[data-submenu-section='0']");
        const defaultSubmenuItem = $(".menu-catalog-submenu-section[data-root-pointer='0']");
        let currentCatalogTitle = catalogTitle.data('catalog-title');

        catalogTitle.text(currentCatalogTitle);
        rootItem.removeClass('selected');
        rootItem.closest('.menu-catalog-root').removeClass('hide');
        rootItem.closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        rootSubmenuItem.removeClass('active');
        defaultRootItem.addClass('selected');
        defaultSubmenuItem.addClass('active');
    });

    if (window.matchMedia('(min-width: 992px)').matches) {
        if (!$('html').hasClass('touch')) {
            rootItem.on('mouseover', function () {
                let rootItemId = null;
                if ($(this).is('[data-submenu-section]')) {
                    rootItemId = $(this).data('submenu-section');
                }

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        } else {
            rootItem.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        }
    } else if (window.matchMedia('(max-width: 991.98px)').matches) {
        rootItem.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let rootItemId = $(this).data('submenu-section');
            let currentCatalogTitle = $(this).text();

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog').find('.menu-catalog-header').addClass('submenu');
            $(this).closest('.menu-catalog-root').addClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').addClass('active');
            $('.menu-catalog-submenu-section').removeClass('active');
            $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
        });

        $('.menu-catalog-title-back').on('click', function (e) {
            let currentCatalogTitle = catalogTitle.data('catalog-title');

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog-header').removeClass('submenu');
            $(this).closest('.menu-catalog').find('.menu-catalog-root').removeClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        });
    }
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let spaceBetweenDesktop = 20;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);
            if ($(this).is('[data-basic-slider-gap]')) {
                spaceBetweenDesktop = 40;
            }

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    992: {
                        spaceBetween: spaceBetweenDesktop
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.menu-catalog-submenu-banners').length) {
        $('.menu-catalog-submenu-banners').each(function (i) {
            let currentElem = $(this).find('.swiper').addClass('menu-catalog-submenu-banners-slider-' + i);

            let sliderCatalogSubmenuBanners = new Swiper('.menu-catalog-submenu-banners-slider-' + i, {
                spaceBetween: 12,
                slidesPerView: 'auto',
                breakpoints: {
                    992: {
                        spaceBetween: 40
                    },
                }
            });
        });
    }

    if ($('.index-slider-wrapper').length) {
        const indexSliderDesktopSettings = new Swiper('.index-slider', {
            slidesPerView: 1,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.index-slider .swiper-button-next',
                prevEl: '.index-slider .swiper-button-prev',
            },
            pagination: {
                el: ".index-slider .swiper-pagination",
                clickable: true,
            },
        });
    }
};

// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = $(this).data('spoiler-more');
            let currentLessText = $(this).data('spoiler-less');
            let defaultHeight = 340;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if ($(this).is('[data-spoiler-more]')) {
                currentMoreText = currentMoreText;
                currentLessText = defaultLessText;
            } else if ($(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = currentLessText;
            } else if (!$(this).is('[data-spoiler-more]') && !$(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            if ($(this).find('.spoiler-content').height() > defaultHeight) {
                $(this).addClass('spoiler-scrolled');
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            if ($(this).is('[data-spoiler-sidebar]')) {
                $('.spoiler-' + i).readmore({
                    collapsedHeight: currentElemHeight,
                    moreLink: '<a class="link link-red link-tdu" href="javascript:;">\n' +
                        '           <span class="text-content">' + currentMoreText + '</span>\n' +
                        '       </a>',
                    lessLink: '<a class="link link-red link-tdu" href="javascript:;">\n' +
                        '           <span class="text-content">' + currentLessText + '</span>\n' +
                        '       </a>',
                });
            } else {
                $('.spoiler-' + i).readmore({
                    collapsedHeight: currentElemHeight,
                    moreLink: '<a class="link link-primary link-dropdown" href="javascript:;">\n' +
                        '           <span class="text-content">' + currentMoreText + '</span>\n' +
                    '               <svg class="icon icon-fill">\n' +
                    '                   <use href="img/sprite.svg#chevron-down"></use>\n' +
                    '               </svg>\n' +
                        '       </a>',
                    lessLink: '<a class="link link-primary link-dropdown" href="javascript:;">\n' +
                        '           <span class="text-content">' + currentLessText + '</span>\n' +
                    '               <svg class="icon icon-fill">\n' +
                    '                   <use href="img/sprite.svg#chevron-up"></use>\n' +
                    '               </svg>\n' +
                        '       </a>',
                });
            }
        });
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Initialization input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            const tagbarSliderSetting = {
                slidesPerView: 'auto',
                spaceBetween: 8,
                direction: 'horizontal',
            };
            let tagbarSlider = null;

            slider.eq(i).addClass('tag-bar-slider-' + i);

            breakpointChecker();
            $(window).on('resize', breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSlider !== null) tagbarSlider.destroy(true, true);
                    tagbarSlider = null;
                }
                else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    tagbarSlider = new Swiper('.tag-bar-slider-' + i, tagbarSliderSetting);
                }
            }
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
};

// Initialize notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        actionNotice
            .fadeOut()
            .removeClass('added');

        if ($(this).hasClass('active')) {
            showNotification();
            setTimeout(hideNotification, 3000);
            return;
        }
    });

    function showNotification() {
        actionNotice
            .addClass('added')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        actionNotice
            .fadeOut('slow')
            .removeClass('added');
    }
};
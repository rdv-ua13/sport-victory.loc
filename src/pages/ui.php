<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Aeonik Pro TRIAL.otf" as="font" type="font/opentype" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/ui.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>
<body>
    <div class="ui">
        <div class="container-fluid">
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Colors</h3>

                <div class="ui-row">
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--black-color" style="background-color: var(--black-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--white-color" style="background-color: var(--white-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray2-color" style="background-color: var(--gray2-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray3-color" style="background-color: var(--gray3-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray4-color" style="background-color: var(--gray4-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray5-color" style="background-color: var(--gray5-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--yellow-color" style="background-color: var(--yellow-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--orange-color" style="background-color: var(--orange-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--beige-color" style="background-color: var(--beige-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--red-color" style="background-color: var(--red-color);"></span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Icons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">использование use ==> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="#arrow-right">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-right"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#arrow-left">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-left"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#arrow-up">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-up"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#arrow-down">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-down"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-up">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-up"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-down">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-left">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-left"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-right">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#search">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#menu">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cross">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cart-tick">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#cart-tick"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cart-add">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#cart-add"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#timer">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#timer"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#calendar">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#calendar"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#bookmarks">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#bookmarks"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-heart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-heart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-user-octagon">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-user-octagon"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-bag">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-bag"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-tag-cross">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-tag-cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-star">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-star"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-car">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-car"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-check">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-check"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#double-box">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#double-box"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#double-cpu-setting">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#double-cpu-setting"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#double-category">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#double-category"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-wa">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-wa"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-tg">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size L (default)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size M</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size S</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">alternative buttons</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-header'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-header">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-user-octagon"></use>
                                </svg>
                                <span class="btn__text">Кабинет</span>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-square'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-square">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-cart'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-cart">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#cart-add"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-icon'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-tag-cross"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-play'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-play">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#play"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Controls</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">chip</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='chip chip-gray'">
                            <!--start ui content-->
                            <span class="chip chip-gray">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-black'">
                            <!--start ui content-->
                            <span class="chip chip-black">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-red'">
                            <!--start ui content-->
                            <span class="chip chip-red">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-orange'">
                            <!--start ui content-->
                            <span class="chip chip-orange">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-green'">
                            <!--start ui content-->
                            <span class="chip chip-green">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-blue'">
                            <!--start ui content-->
                            <span class="chip chip-blue">Витамины</span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">tag</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <div class="slider-out">
                            <div class="tag-bar swiper" data-tag-bar-slider>
                                <div class="swiper-wrapper tag-bar__list">
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Витамины</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Добавки</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Для фитнеса</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Для выносливости</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Коллаген</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Красота</span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Для силы</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Links</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-secondary'">
                            <!--start ui content-->
                            <a class="link link-secondary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-invert'" style="padding: 0 8px; background-color: var(--black-color);">
                            <!--start ui content-->
                            <a class="link link-invert" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu'">
                            <!--start ui content-->
                            <a class="link link-tdu" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary link-dropdown" href="javascript:;">
                                <span class="text-content">Витамины и добавки</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Fields</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper has-icon-l has-icon-r">
                                    <input
                                            id="ui-input-search-example-1"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-r">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="search">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-search-wrapper has-icon-l">
                                    <input
                                            id="ui-input-search-example-2"
                                            class="input-reset input input-search"
                                            type="search"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label for="ui-input-search-example-2" class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label for="ui-input-search-example-2" class="input-search-action">
                                        <button class="btn-reset btn btn-icon input-delete-btn" type="button">
                                            <svg class="icon icon-fill btn__icon">
                                                <use href="img/sprite.svg#filled-tag-cross"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-reset btn btn-sm input-search-btn" type="submit">
                                            <span class="btn__text">Найти</span>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Content</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">card</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='card' (default)">
                            <!--start ui content-->
                            <span class="card card-info">
                                <a class="card__view" href="javascript:;">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/brand-1.png"
                                            alt="Изображение блока"
                                    >
                                </a>
                            </span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Hr</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">class="hr"</div>
                    </div>
                    <div class="hr"></div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">class="hr-logo"</div>
                    </div>
                    <div class="hr-logo"></div>
                </div>
            </div>
        </div>

        <br>
    </div>
</body>
</html>
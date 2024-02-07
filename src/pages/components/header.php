<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>SPORT VICTORY NUTRITION</title>

    <link rel="preload" href="fonts/Aeonik Pro TRIAL.otf" as="font" type="font/opentype" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>              <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>  <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>     <!-- validate -->
    <script defer src="js/messages_ru.js"></script>         <!-- validate -->
    <script defer src="js/popper.js"></script>              <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>       <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>        <!-- fancybox -->
    <script defer src="js/select2.js"></script>             <!-- select2 -->
    <script defer src="js/readmore.js"></script>            <!-- readmore -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<? if (strpos($_SERVER["REQUEST_URI"], "card-product.php")) : ?>
<body class="card-product-page">
<? else : ?>
<body>
<? endif; ?>
<header class="header fixed-block">
    <?/*
    <div class="header-top">
        <div class="container header-container">
            <div class="header-top-nav">
                <ul class="list-reset header-top-nav__list">
                    <li><a class="header-top__link" href="javascript:;">Доставка</a></li>
                    <li><a class="header-top__link" href="javascript:;">Оплата</a></li>
                    <li><a class="header-top__link" href="javascript:;">Гарантия</a></li>
                    <li><a class="header-top__link" href="javascript:;">Программа лояльности</a></li>
                    <li><a class="header-top__link" href="javascript:;">Акции</a></li>
                    <li><a class="header-top__link" href="javascript:;">Статьи</a></li>
                    <li><a class="header-top__link" href="javascript:;">Распродажа</a></li>
                    <li><a class="header-top__link" href="javascript:;">Контакты</a></li>
                </ul>
            </div>
            <div class="header-top-city">
                <button
                        class="btn-reset header-top__link header-top-city__spoiler"
                        type="button"
                        data-fancybox
                        data-src="#modal-city"
                >
                    <svg class="icon icon-sm">
                        <use href="img/sprite.svg#pin"></use>
                    </svg>
                    <span class="header-top-city__spoiler-text">
                            <span>Москва</span>
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </span>
                </button>
            </div>
			<?/* login
                <div class="header-top-profile">
                    <div class="header-top-profile__view">
                        <picture>
                            <source srcset="img/avatar.webp" type="image/webp">
                            <img
                                loading="lazy"
                                src="img/avatar.png"
                                width="28"
                                height="28"
                                alt="Изображение блока"
                            >
                        </picture>
                    </div>
                    <div class="header-top-profile__descr">
                        <div class="header-top-profile__name">Илья маковецкий</div>
                        <div class="header-top-profile__bonus">
                            <div class="header-top-profile__bonus-value">
                                <span>2746,99</span>
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-bonus"></use>
                                </svg>
                            </div>
                            <div class="header-top-profile__bonus-exp">до 01.04</div>
                        </div>
                    </div>
                    <div class="header-top-profile__pointer">
                        <svg class="icon">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </div>
                </div>* /?>
			<?/ * not logged * /?>
            <div class="header-top-profile not-logged">
                <button class="btn-reset btn btn-mini btn-light" data-fancybox data-src="#modal-auth">
                    <span class="btn__text">Войти</span>
                </button>
                <button class="btn-reset btn btn-mini btn-primary" data-fancybox data-src="#modal-reg">
                    <span class="btn__text">Регистрация</span>
                </button>
            </div>
        </div>
    </div>
    */?>

    <div class="header-nav">
        <div class="container header-container header-nav-container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                            loading="lazy"
                            class="image"
                            src="img/sprite.svg#logo"
                            width="162"
                            height="78"
                            alt="SPORT VICTORY NUTRITION"
                    >
                </a>
            </div>

            <div class="header-search">
                <form id="" method="" action="javascript:;">
                    <div class="input-wrapper input-search-wrapper has-icon-l">
                        <input
                                id="header-search"
                                class="input-reset input input-search"
                                type="search"
                                name=""
                                value=""
                                placeholder="Найти витамин или добавку..."
                                autocomplete="off"
                        >
                        <label for="header-search" class="input-icon input-icon-l">
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                        </label>
                        <label for="header-search" class="input-search-action">
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
                </form>
            </div>

            <div class="header-contacts">
                <a class="header-contacts__tel" href="tel:+88005553829">
                    <span class="fz-subtitle">8 800 555-38-29</span>
                    <span class="link-secondary fz-caption">Звонок по РФ бесплатный</span>
                </a>
                <div class="header-contacts__soc social">
                    <ul class="list-reset social__list">
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                                <svg class="icon icon-fill icon-md">
                                    <use href="img/sprite.svg#soc-wa"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                                <svg class="icon icon-fill icon-md">
                                    <use href="img/sprite.svg#soc-tg"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-profile">
                <ul class="list-reset header-profile__list">
                    <li>
                        <button class="btn-reset btn btn-header">
                            <svg class="icon icon-fill btn__icon">
                                <use href="img/sprite.svg#filled-user-octagon"></use>
                            </svg>
                            <span class="btn__text">Кабинет</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-reset btn btn-header">
                            <svg class="icon icon-fill btn__icon">
                                <use href="img/sprite.svg#filled-heart"></use>
                            </svg>
                            <span class="btn__text">Избранное</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-reset btn btn-header">
                            <svg class="icon icon-fill btn__icon">
                                <use href="img/sprite.svg#filled-bag"></use>
                            </svg>
                            <span class="btn__text">Корзина</span>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="header-catalog">
                <div class="header-catalog-spoiler">
                    <button
                            class="btn-reset btn btn-md btn-secondary menu-catalog-spoiler switch-content"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-catalog-spoiler
                            data-overlay-transparent
                    >
                        <svg class="icon icon-fill btn__icon icon-default">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                        <svg class="icon icon-fill btn__icon icon-active">
                            <use href="img/sprite.svg#cross"></use>
                        </svg>
                        <span class="btn__text">Каталог</span>
                    </button>
                </div>
                <div class="header-catalog-preview">
                    <a class="link link-primary link-dropdown" href="javascript:;">
                        <span class="text-content">Витамины и добавки</span>
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </a>
                    <a class="link link-primary link-dropdown" href="javascript:;">
                        <span class="text-content">Фитнес</span>
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </a>
                    <a class="link link-primary link-dropdown" href="javascript:;">
                        <span class="text-content">По назначению</span>
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </a>
                    <a class="link link-primary" href="javascript:;">Бренды</a>
                    <a class="link link-new" href="javascript:;">Новинки</a>
                </div>
                <div class="header-catalog-sections">
                    <a class="link link-secondary" href="javascript:;">О компании</a>
                    <a class="link link-secondary" href="javascript:;">Доставка и оплата</a>
                    <a class="link link-secondary" href="javascript:;">Блог</a>
                    <a class="link link-secondary" href="javascript:;">Контакты</a>
                </div>
            </div>

            <div class="header-mobile-menu">
                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" data-menu>
    <div class="mobile-menu-close" data-menu-close>
        <svg class="icon">
            <use href="img/sprite.svg#cross"></use>
        </svg>
    </div>

    <div class="mobile-menu__item mobile-menu-catalog">
        <button
                class="btn-reset btn btn-primary menu-catalog-spoiler"
                aria-label="Открыть меню"
                aria-expanded="false"
                data-catalog-spoiler
                data-overlay-transparent
        >
            <svg class="icon btn__icon menu-catalog-spoiler__icon">
                <use href="img/sprite.svg#burger"></use>
            </svg>
            <svg class="icon btn__icon menu-catalog-spoiler__icon-active">
                <use href="img/sprite.svg#cross"></use>
            </svg>
            <span class="btn__text">Каталог</span>
        </button>
    </div>

    <ul class="list-reset mobile-menu-list">
        <li>
            <button
                    class="btn-reset mobile-menu__item mobile-menu__link mobile-menu-city"
                    type="button"
                    data-mobile-city-spoiler
            >
                <svg class="icon icon-sm">
                    <use href="img/sprite.svg#pin"></use>
                </svg>
                <span class="mobile-menu-city__text">
                            <span>Москва</span>
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </span>
            </button>
        </li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">доставка</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">оплата</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Гарантия</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">программа лояльности</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Акции</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Распродажа</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Контакты</a></li>
    </ul>

    <div class="mobile-menu-footer">
        <div class="mobile-menu__item mobile-menu-login">
            <button class="btn-reset btn btn-b-light" data-fancybox data-src="#modal-auth">
                <span class="btn__text">Войти</span>
            </button>
            <button class="btn-reset btn btn-b-dark" data-fancybox data-src="#modal-reg">
                <span class="btn__text">Регистрация</span>
            </button>
        </div>

        <div class="mobile-menu__item mobile-menu-contacts">
            <a class="mobile-menu-contacts__number" href="tel:+74951183770">+7 (495) 118-37-70</a>
            <a class="link-dashed link-gray mobile-menu-contacts__call" href="javascript:;">заказать звонок</a>
        </div>
    </div>
</div>

<div class="mobile-city">
    <div class="mobile-city-header">
        <div class="mobile-city-header__top">
            <div class="mobile-city__title h4">Выберите ваш город</div>
            <div class="mobile-city__close">
                <svg class="icon icon-md">
                    <use href="img/sprite.svg#cross"></use>
                </svg>
            </div>
        </div>
        <div class="mobile-city-search">
            <div class="mobile-city-search__item">
                <div class="input-search-wrapper">
                    <input
                            class="input-reset input-search"
                            type="search"
                            name=""
                            placeholder="Найти город..."
                    >
                    <button class="btn-reset btn btn-link input-delete-btn">
                        <svg class="icon btn__icon icon-xs">
                            <use href="img/sprite.svg#cross"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-city-search__item">
                <div class="mobile-search-results-hint">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <button class="btn-reset btn btn-mini btn-b-light">
                                    <span class="btn__text">Москва</span>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="btn-reset btn btn-mini btn-b-light">
                                    <span class="btn__text">Санкт-петербург</span>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="btn-reset btn btn-mini btn-b-light">
                                    <span class="btn__text">Казань</span>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="btn-reset btn btn-mini btn-b-light">
                                    <span class="btn__text">Воронеж</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-city-alphabet">
        <div class="mobile-city-alphabet__list">
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">А</div>
                <div class="mobile-city-alphabet__city">Абакан</div>
                <div class="mobile-city-alphabet__city">Альметьевск</div>
                <div class="mobile-city-alphabet__city">Ангарск</div>
                <div class="mobile-city-alphabet__city">Артем</div>
                <div class="mobile-city-alphabet__city">Ачинск</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Б</div>
                <div class="mobile-city-alphabet__city">Барнаул</div>
                <div class="mobile-city-alphabet__city">Белгород</div>
                <div class="mobile-city-alphabet__city">Белово</div>
                <div class="mobile-city-alphabet__city">Бердск</div>
                <div class="mobile-city-alphabet__city">Бийск</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">В</div>
                <div class="mobile-city-alphabet__city">Великие Луки</div>
                <div class="mobile-city-alphabet__city">Владивосток</div>
                <div class="mobile-city-alphabet__city">Воронеж</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Г</div>
                <div class="mobile-city-alphabet__city">Губкин</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Е</div>
                <div class="mobile-city-alphabet__city">Ейск</div>
                <div class="mobile-city-alphabet__city">Екатеринбург</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Ж</div>
                <div class="mobile-city-alphabet__city">Железногорск</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">З</div>
                <div class="mobile-city-alphabet__city">Зеленогорск</div>
                <div class="mobile-city-alphabet__city">Златоуст</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">И</div>
                <div class="mobile-city-alphabet__city">Иваново</div>
                <div class="mobile-city-alphabet__city">Иркутск</div>
                <div class="mobile-city-alphabet__city">Искитим</div>
                <div class="mobile-city-alphabet__city">Ишим</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Й</div>
                <div class="mobile-city-alphabet__city">Йошкар-Ола</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">К</div>
                <div class="mobile-city-alphabet__city">Казань</div>
                <div class="mobile-city-alphabet__city">Канск</div>
                <div class="mobile-city-alphabet__city">Кемерово</div>
                <div class="mobile-city-alphabet__city">Киселевск</div>
                <div class="mobile-city-alphabet__city">Краснодар</div>
                <div class="mobile-city-alphabet__city">Краснотурьинск</div>
                <div class="mobile-city-alphabet__city">Красноярск</div>
                <div class="mobile-city-alphabet__city">Кызыл</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">Л</div>
                <div class="mobile-city-alphabet__city">Ленинск-Кузнецкий</div>
                <div class="mobile-city-alphabet__city">Лесосибирск</div>
            </div>
            <div class="mobile-city-alphabet__item">
                <div class="mobile-city-alphabet__title">М</div>
                <div class="mobile-city-alphabet__city">Майский</div>
                <div class="mobile-city-alphabet__city">Маркс</div>
                <div class="mobile-city-alphabet__city">Мегион</div>
                <div class="mobile-city-alphabet__city">Миасс</div>
                <div class="mobile-city-alphabet__city">Минусинск</div>
                <div class="mobile-city-alphabet__city">Мурманск</div>
                <div class="mobile-city-alphabet__city">Муром</div>
            </div>
        </div>
    </div>
</div>

<div class="menu-catalog" data-catalog>
    <div class="container menu-catalog-container">
        <div class="menu-catalog-header">
            <div class="menu-catalog-title h4">
                <div class="menu-catalog-title-back">
                    <svg class="icon icon-md">
                        <use href="img/sprite.svg#arrow-left"></use>
                    </svg>
                </div>
                <span data-catalog-title="Каталог">Каталог</span>
            </div>
            <div class="menu-catalog-close" data-catalog-close>
                <svg class="icon icon-md">
                    <use href="img/sprite.svg#cross"></use>
                </svg>
            </div>
        </div>
        <div class="menu-catalog-root">
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn menu-catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-wiring-products"></use>
                    </svg>
                    <span class="btn__text">Розетки и выключатели</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-wiring"></use>
                    </svg>
                    <span class="btn__text">Электроустановочные изделия</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-low-voltage"></use>
                    </svg>
                    <span class="btn__text">Низковольтное оборудование</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                    </svg>
                    <span class="btn__text">Щиты, шкафы, боксы</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-cable"></use>
                    </svg>
                    <span class="btn__text">Кабель</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-lighting"></use>
                    </svg>
                    <span class="btn__text">Светотехника</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-connectors"></use>
                    </svg>
                    <span class="btn__text">Вилки, штекеры, разъемы, шнуры</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-tools"></use>
                    </svg>
                    <span class="btn__text">Инструменты и монтажные материалы</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-ventilation"></use>
                    </svg>
                    <span class="btn__text">Системы вентиляции и обогрева</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-electric-motors"></use>
                    </svg>
                    <span class="btn__text">Автоматизация и электродвигатели</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <span class="btn__text">Молниезащита и заземление</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <span class="btn__text">Элементы и устройства питания</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <span class="btn__text">Разные товары для монтажников</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>

            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <span class="btn__text">Молниезащита и заземление</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <span class="btn__text">Элементы и устройства питания</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <span class="btn__text">Разные товары для монтажников</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <span class="btn__text">Молниезащита и заземление</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <span class="btn__text">Элементы и устройства питания</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <span class="btn__text">Разные товары для монтажников</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <span class="btn__text">Молниезащита и заземление</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <span class="btn__text">Элементы и устройства питания</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="btn-reset btn" href="javascript:;">
                    <svg class="icon btn__icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <span class="btn__text">Разные товары для монтажников</span>
                    <span class="menu-catalog-root-item-pointer">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                </a>
            </div>
        </div>
        <div class="menu-catalog-submenu">
            <div class="menu-catalog-submenu-section active" data-root-pointer="0">
                <div class="h3 menu-catalog-submenu-section__title">Розетки и выключатели</div>
                <div class="menu-catalog-submenu-links">
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Все товары раздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Розетки</span></a></li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Выключатели</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Рамки</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Диммеры</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </span>
                            </a>
                        </li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Датчики движения</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Датчики освещенности</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Выключатели с ДУ</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Блоки розеток и выключателей</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Антенные блоки</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Компьютерные розетки</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Системы наблюдения и оповещения</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Дверные звонки и домофоны</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Системы видеонаблюдения</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Системы прокладки кабеля</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Кабель-каналы и аксессуары</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Кабельные лотки и аксессуары</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Трубы для кабеля и комплектующие</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Связь и безопасность</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Звонки</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Домофоны</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Датчики движения</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Датчики освещенности</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Терморегуляторы</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Видеонаблюдени</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Пожарно-охранная сигнализация, системы оповещения</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalogmenu-catalog-submenu-link-text">Устройства управления жалюзи, звуком, сигнализацией</span></a></li>
                    </ul>
                </div>
                <div class="menu-catalog-submenu-banners">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-catalog-submenu-section" data-root-pointer="1">
                <div class="h3 menu-catalog-submenu-section__title">Розетки и выключатели 2</div>
                <div class="menu-catalog-submenu-links">
                    <ul class="list-reset menu-catalogmenu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;">Все товары раздела</a></li>
                        <li><a class="link-dark" href="javascript:;">Розетки</a></li>
                        <li><a class="link-dark" href="javascript:;">Выключатели</a></li>
                        <li><a class="link-dark" href="javascript:;">Рамки</a></li>
                        <li><a class="link-dark" href="javascript:;">Диммеры</a></li>
                        <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                        <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                        <li><a class="link-dark" href="javascript:;">Выключатели с ДУ</a></li>
                    </ul>
                    <ul class="list-reset menu-catalogmenu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;">Системы наблюдения и оповещения</a></li>
                        <li><a class="link-dark" href="javascript:;">Дверные звонки и домофоны</a></li>
                        <li><a class="link-dark" href="javascript:;">Системы видеонаблюдения</a></li>
                    </ul>
                    <ul class="list-reset menu-catalogmenu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;">Системы прокладки кабеля</a></li>
                        <li><a class="link-dark" href="javascript:;">Кабель-каналы и аксессуары</a></li>
                        <li><a class="link-dark" href="javascript:;">Кабельные лотки и аксессуары</a></li>
                        <li><a class="link-dark" href="javascript:;">Трубы для кабеля и комплектующие</a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;">Связь и безопасность</a></li>
                        <li><a class="link-dark" href="javascript:;">Звонки</a></li>
                        <li><a class="link-dark" href="javascript:;">Домофоны</a></li>
                        <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                        <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                        <li><a class="link-dark" href="javascript:;">Терморегуляторы</a></li>
                        <li><a class="link-dark" href="javascript:;">Видеонаблюдени</a></li>
                        <li><a class="link-dark" href="javascript:;">Пожарно-охранная сигнализация, системы оповещения</a></li>
                        <li><a class="link-dark" href="javascript:;">Устройства управления жалюзи, звуком, сигнализацией</a></li>
                        <li><a class="link-dark" href="javascript:;">Терморегуляторы</a></li>
                        <li><a class="link-dark" href="javascript:;">Видеонаблюдени</a></li>
                    </ul>
                </div>
                <div class="menu-catalog-submenu-banners">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <picture>
                                    <source srcset="img/.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/.png"
                                            class="image"
                                            width=""
                                            height=""
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu-panel">
    <div class="mobile-menu-panel__cart product-card__cart cart-buy" data-fixed-cart-coord>
        <div class="product-card__cart-quantity cart-quantity disabled">
            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                <svg class="icon icon-sm btn__icon">
                    <use href="img/sprite.svg#minus"></use>
                </svg>
                <svg class="icon icon-sm btn__icon icon-active">
                    <use href="img/sprite.svg#trash"></use>
                </svg>
            </button>
            <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                <svg class="icon icon-sm btn__icon">
                    <use href="img/sprite.svg#plus"></use>
                </svg>
            </button>
        </div>
        <button class="btn-reset btn btn-primary cart-in" type="button">
            <span class="btn__text">В КОРЗИНУ</span>
        </button>
    </div>

    <div class="mobile-menu-panel__toolbar">
        <ul class="list-reset mobile-menu-panel__list">
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn" data-catalog-spoiler>
                        <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                            <svg class="icon">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                        </span>
                    <span class="header-profile__btn-text">Каталог</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#bookmarks"></use>
                        </svg>
                        <span class="header-profile__btn-count">12</span>
                    </span>
                    <span class="header-profile__btn-text">Избранное</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#inbox-filled"></use>
                        </svg>
                        <span class="header-profile__btn-count">7</span>
                    </span>
                    <span class="header-profile__btn-text">Сметы</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#barchart"></use>
                        </svg>
                    </span>
                    <span class="header-profile__btn-text">Кабинет</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn mobile-menu-panel__btn-cart">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                        <span class="header-profile__btn-count">3</span>
                    </span>
                    <span class="header-profile__btn-text">12 470,80 ₽</span>
                </button>
            </li>
        </ul>
    </div>
</div>

<div class="action-notice">
    <div class="action-notice__view">
        <svg class="icon icon-sm">
            <use href="img/sprite.svg#bookmarks"></use>
        </svg>
    </div>
    <div class="action-notice__descr">
        <div class="action-notice__title">Товар добавлен в <span class="action-notice__title-category">избранное</span></div>
        <div class="action-notice__text">В списке <span class="action-notice__count">2</span> товара</div>
    </div>
</div>

<main class="main">
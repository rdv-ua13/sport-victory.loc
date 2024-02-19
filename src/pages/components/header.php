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

<? if (strpos($_SERVER["REQUEST_URI"], "index.php")) : ?>
<body class="index">
<? else : ?>
<body>
<? endif; ?>
<header class="header fixed-block">
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
                    <span class="header-contacts__tel-num fz-subtitle">8 800 555-38-29</span>
                    <span class="header-contacts__tel-caption link-secondary fz-caption">Звонок по РФ бесплатный</span>
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
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#menu"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" data-menu>
    <div class="mobile-menu-close" data-menu-close>
        <svg class="icon icon-fill">
            <use href="img/sprite.svg#cross"></use>
        </svg>
    </div>

    <div class="mobile-menu__item mobile-menu-catalog">
        <button
                class="btn-reset btn btn-md btn-secondary menu-catalog-spoiler"
                aria-label="Открыть меню"
                aria-expanded="false"
                data-catalog-spoiler
                data-overlay-transparent
        >
            <svg class="icon icon-fill btn__icon">
                <use href="img/sprite.svg#menu"></use>
            </svg>
            <span class="btn__text">Каталог</span>
        </button>
    </div>

    <ul class="list-reset mobile-menu-list">
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">О компании</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Доставка и оплата</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Блог</a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Контакты</a></li>
    </ul>

    <div class="mobile-menu-footer">
        <?/* todo - стилизовать модалки */?>
        <div class="mobile-menu__item mobile-menu-login">
            <button class="btn-reset btn btn-md btn-primary" data-fancybox data-src="#modal-auth">
                <span class="btn__text">Войти</span>
            </button>
            <button class="btn-reset btn btn-md btn-primary" data-fancybox data-src="#modal-reg">
                <span class="btn__text">Регистрация</span>
            </button>
        </div>

        <div class="mobile-menu__item">
            <a class="mobile-menu-contacts" href="tel:+88005553829">
                <span class="mobile-menu-contacts__num fz-subtitle">8 800 555-38-29</span>
                <span class="mobile-menu-contacts__caption link-secondary fz-caption">Звонок по РФ бесплатный</span>
            </a>
        </div>
    </div>
</div>

<div class="menu-catalog" data-catalog>
    <div class="container menu-catalog-container">
        <div class="menu-catalog-header">
            <div class="menu-catalog-title h4">
                <div class="menu-catalog-title-back">
                    <svg class="icon icon-md icon-fill">
                        <use href="img/sprite.svg#arrow-left"></use>
                    </svg>
                </div>
                <span data-catalog-title="Каталог">Каталог</span>
            </div>
            <div class="menu-catalog-close" data-catalog-close>
                <svg class="icon icon-lg icon-fill">
                    <use href="img/sprite.svg#cross"></use>
                </svg>
            </div>
        </div>
        <div class="menu-catalog-root">
            <div class="menu-catalog-root-item">
                <a class="menu-catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <span class="text-content">Витамины и добавки</span>
                    <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <span class="text-content">Фитнес</span>
                    <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="2">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <span class="text-content">По назначению</span>
                    <span class="menu-catalog-root-item-pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="menu-catalog-root-link" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <span class="text-content">Бренды</span>
                </a>
            </div>
            <div class="menu-catalog-root-item">
                <a class="menu-catalog-root-link" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <span class="text-content link-new">Новинки</span>
                </a>
            </div>
        </div>
        <div class="menu-catalog-submenu">
            <div class="menu-catalog-submenu-section active" data-root-pointer="0">
                <div class="h4 menu-catalog-submenu-section__title">Витамины и добавки</div>
                <div class="menu-catalog-submenu-links">
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Все товары раздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Текст подраздела</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                </div>
                <div class="menu-catalog-submenu-banners">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-catalog-submenu-section active" data-root-pointer="1">
                <div class="h4 menu-catalog-submenu-section__title">Фитнес</div>
                <div class="menu-catalog-submenu-links">
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Все товары раздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Текст подраздела</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                </div>
                <div class="menu-catalog-submenu-banners">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-catalog-submenu-section active" data-root-pointer="2">
                <div class="h4 menu-catalog-submenu-section__title">По назначению</div>
                <div class="menu-catalog-submenu-links">
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Все товары раздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;">
                                <span class="menu-catalog-submenu-link-text">Текст подраздела</span>
                                <span class="menu-catalog-submenu-links-pointer">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a>
                        </li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                    <ul class="list-reset menu-catalog-submenu-links__list">
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                        <li><a class="link-dark" href="javascript:;"><span class="menu-catalog-submenu-link-text">Текст подраздела</span></a></li>
                    </ul>
                </div>
                <div class="menu-catalog-submenu-banners">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                            <div class="menu-catalog-submenu-banners__item swiper-slide">
                                <img
                                        loading="lazy"
                                        src="img/.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="action-notice">
    <div class="action-notice__view">
        <svg class="icon icon-fill icon-sm">
            <use href="img/sprite.svg#bookmarks"></use>
        </svg>
    </div>
    <div class="action-notice__descr">
        <div class="action-notice__title">Товар добавлен в <span class="action-notice__title-category">избранное</span></div>
        <div class="action-notice__text">В списке <span class="action-notice__count">2</span> товара</div>
    </div>
</div>

<main class="main">
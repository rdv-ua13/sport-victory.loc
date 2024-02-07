<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="mainscreen-slider-container">
        <div class="swiper mainscreen-slider js-mainscreen-slider">
            <div class="mainscreen-slider__header">
                <h1 class="block-mb-md h1 text-center">
                    <span class="green-color">Главный</span> слоган <span class="green-color">заголовка.</span><br>
                    Просто текст.
                </h1>
                <div class="mainscreen-slider__action">
                    <button class="btn-reset btn btn--fill">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <button class="btn-reset btn">
                        <span class="btn__text">Кнопка</span>
                    </button>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="mainscreen-slider__pointer">
                        <img
                                loading="lazy"
                                src="img/test.png"
                                class="image"
                                width=""
                                height=""
                                alt="Изображение главного слайдера"
                        >
                        <div class="mainscreen-slider__video">
                            <a
                                    href=""
                                    class="btn-reset btn"
                                    data-fancybox="mainslider"
                                    data-src="demo.mp4"
                            >
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#play"></use>
                                </svg>
                                <span class="btn__text">Видео о платформе</span>
                            </a>
                        </div>

                        <div class="mainscreen-slider__pointer-hero">
                            <div class="mainscreen-slider__pointer-hero-item">
                                <span class="mainscreen-slider__pointer-hero-descr">Электронная система учета<br> волонтерского опыта и достижений</span>
                                <span class="mainscreen-slider__pointer-hero-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="mainscreen-slider__pointer-hero-item">
                                <span class="mainscreen-slider__pointer-hero-descr">Краудфаундинг для<br> экопроектов и организаций</span>
                                <span class="mainscreen-slider__pointer-hero-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#money2"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="mainscreen-slider__pointer-hero-item">
                                <span class="mainscreen-slider__pointer-hero-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#user"></use>
                                    </svg>
                                </span>
                                <span class="mainscreen-slider__pointer-hero-descr">Личные кабинеты организаций<br> и супервайзеров</span>
                            </div>
                        </div>

                        <div class="mainscreen-slider__pointer-decor-left">
                            <div class="mainscreen-slider__pointer-decor-item blur">
                                <img
                                    loading="lazy"
                                    src="img/test.png"
                                    class="mainscreen-slider__pointer-decor-img"
                                    width="40"
                                    height="40"
                                    alt="Изображение блока"
                                >
                            </div>
                        </div>
                        <div class="mainscreen-slider__pointer-decor-right">
                            <div class="mainscreen-slider__pointer-decor-item">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="mainscreen-slider__pointer-decor-img"
                                        width="50"
                                        height="50"
                                        alt="Изображение блока"
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mainscreen-slider__pointer">
                        <img
                                loading="lazy"
                                src="img/test.png"
                                class="image"
                                width=""
                                height=""
                                alt="Изображение главного слайдера"
                        >
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mainscreen-slider__pointer">
                        <img
                                loading="lazy"
                                src="img/test.png"
                                class="image"
                                width=""
                                height=""
                                alt="Изображение главного слайдера"
                        >
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
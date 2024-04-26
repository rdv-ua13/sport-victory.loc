<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-lg">
	<div class="container">
		<div class="content-page personal-acc">
			<div class="cp-grid">
				<div class="cp-sidebar">
					<div class="cp-sidebar-item cp-sidebar-top">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm icon-fill">
								<use href="img/sprite.svg#order"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Заказы</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link active" href="javascript:;">В работе</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Все заказы</a></li>
						</ul>
					</div>
					<div class="cp-sidebar-item">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm icon-fill">
								<use href="img/sprite.svg#cart-tick"></use>
							</svg>
							<div class="cp-sidebar-item__title">Товары</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li>
                                <a class="cp-sidebar-item__link" href="javascript:;">
                                    Корзина
                                    <span class="content">23</span>
                                </a>
                            </li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Избранные товары</a></li>
						</ul>
					</div>
                    <div class="cp-sidebar-item">
                        <div class="cp-sidebar-item__heading">
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#user-square"></use>
                            </svg>
                            <div class="cp-sidebar-item__title h5">Профиль</div>
                        </div>
                        <ul class="list-reset cp-sidebar-item__list">
                            <li><a class="cp-sidebar-item__link" href="javascript:;">Личные данные</a></li>
                            <li><a class="cp-sidebar-item__link" href="javascript:;">Адреса доставки</a></li>
                            <li><a class="cp-sidebar-item__link" href="javascript:;">Отзывы</a></li>
                        </ul>
                    </div>
                    <div class="cp-sidebar-item cp-sidebar-manager">
                        <div class="cp-sidebar-item__heading">
                            <div class="cp-sidebar-item__title h5">Ваш персональный менеджер</div>
                        </div>
                        <div class="cp-sidebar-item__person">
                            <div class="cp-sidebar-item__person-view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/person.png"
                                    alt="Изображение блока"
                                >
                            </div>
                            <div class="cp-sidebar-item__person-name">Тихомиров Андрей</div>
                        </div>
                        <ul class="list-reset cp-sidebar-item__person-info">
                            <li><a class="link" href="tel:+88005553829">8 800 555-38-29</a></li>
                            <li><a class="link link-red" href="mailto:sales@sportvictorynutrition.ru">sales@sportvictorynutrition.ru</a></li>
                            <li><span class="caption-color">Время работы:<br> ПН-ПТ с 08:00 до 20:00</span></li>
                        </ul>
                    </div>
				</div>

				<div class="cp-content">
					<div class="gap-xs">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
					</div>

					<div class="gap-xs">
						<div class="h2">Заказы</div>
					</div>
					<div class="gap-xs">
						<div class="personal-acc__filter">
                            <form id="" class="personal-acc__search" action="" method="">
                                <div class="personal-acc__search-item personal-acc__search-order input-wrapper has-icon-l">
                                    <input
                                            id="pa-search-order"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Номер заказа, артикул товара..."
                                            autocomplete="off"
                                    >
                                    <label for="pa-search-order" class="input-icon input-icon-l c-pointer">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                                <div class="personal-acc__search-item personal-acc__search-date input-wrapper input-wrapper--flatpickr">
                                    <input
                                            id="pa-search-date"
                                            class="input-reset input flatpickr"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Любая дата"
                                    >
                                </div>
                                <button class="personal-acc__search-item personal-acc__search-btn btn-reset btn btn-md btn-primary" type="submit">
                                    <span class="btn__text">Найти заказ</span>
                                </button>
                            </form>

                            <div class="personal-acc__tabs basic-tabs">
                                <div class="gap-xs slider-out basic-slider-wrap">
                                    <div class="basic-tabs-container basic-slider swiper" data-tab="pa-tabs" data-tabs-slider>
                                        <div class="basic-tabs-slider-list swiper-wrapper reset-slider-list">
                                            <div class="basic-tabs-item swiper-slide">
                                                <span class="tab basic-tabs-trigger" data-target="all"><span>Все заказы</span></span>
                                            </div>
                                            <div class="basic-tabs-item swiper-slide">
                                                <span class="tab basic-tabs-trigger active" data-target="work"><span>В работе</span></span>
                                            </div>
                                            <div class="basic-tabs-item swiper-slide">
                                                <span class="tab basic-tabs-trigger" data-target="completed"><span>Выполненные</span></span>
                                            </div>
                                            <div class="basic-tabs-item swiper-slide">
                                                <span class="tab basic-tabs-trigger" data-target="canceled"><span>Отмененные</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="basic-tabs-content" data-tab-content="pa-tabs">
                                    <div class="basic-tabs-content__panel" data-id="all">
                                        <div class="basic-tabs-content__content empty">
                                            <div class="personal-acc__orders">
                                                <div class="personal-acc__orders-view">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#order"></use>
                                                    </svg>
                                                </div>
                                                <div class="personal-acc__orders-descr">
                                                    <div class="personal-acc__orders-title h4">У вас еще нет заказов</div>
                                                    <div class="personal-acc__orders-hint caption-color">
                                                        Воспользуйтесь <a href="javascript:;" class="link link-tdu caption-color">поиском</a> или <a href="javascript:;" class="link link-tdu caption-color">каталогом</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basic-tabs-content__panel active" data-id="work">
                                        <div class="basic-tabs-content__content">
                                            <div class="personal-acc__orders">
                                                <div class="personal-acc__orders-item">
                                                    <div class="personal-acc__orders-descr">
                                                        <div class="personal-acc__orders-header">
                                                            <div class="personal-acc__orders-header-title">
                                                                <div class="personal-acc__orders-header-id">
                                                                    <span class="clipboard" data-clipboard>
                                                                        <span class="clipboard-target">А-04583544</span>
                                                                        <span class="clipboard-trigger">
                                                                            <svg class="icon icon-fill">
                                                                                <use href="img/sprite.svg#copy"></use>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="personal-acc__orders-header-date">от 26.04.2023 16:18</div>
                                                            </div>
                                                            <div class="personal-acc__orders-header-status product-availability on-order">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#hourglass"></use>
                                                                </svg>
                                                                <span>Комплектуется</span>
                                                            </div>
                                                        </div>
                                                        <div class="personal-acc__orders-details">
                                                            <table class="personal-acc__orders-details-item table-descr">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span>Дата получения</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>09.05.2023 после 12:00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span>Самовывоз из магазина</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>Кузнецкий проспект, д. 17</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="personal-acc__orders-details-item personal-acc__orders-view">
                                                                <div class="slider-out basic-slider-wrap">
                                                                    <div class="basic-slider swiper" data-basic-slider-min-gap>
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-1.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-2.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-3.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-acc__orders-info">
                                                        <div class="personal-acc__orders-total">
                                                            <span class="title-line">Сумма заказа:</span>
                                                            <span class="value-line">5 827,99 ₽</span>
                                                        </div>
                                                        <div class="personal-acc__orders-action">
                                                            <div class="personal-acc__orders-status"><span>Заказ не оплачен</span></div>
                                                            <div class="personal-acc__orders-pay">
                                                                <a class="link link-tdu link-dashed" href="javascript:;">Оплатить онлайн</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="personal-acc__orders-item">
                                                    <div class="personal-acc__orders-descr">
                                                        <div class="personal-acc__orders-header">
                                                            <div class="personal-acc__orders-header-title">
                                                                <div class="personal-acc__orders-header-id">
                                                                    <span class="clipboard" data-clipboard>
                                                                        <span class="clipboard-target">А-04583730</span>
                                                                        <span class="clipboard-trigger">
                                                                            <svg class="icon icon-fill">
                                                                                <use href="img/sprite.svg#copy"></use>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="personal-acc__orders-header-date">от 19.04.2023 16:18</div>
                                                            </div>
                                                            <div class="personal-acc__orders-header-status product-availability in-stock">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#checkbox-checked"></use>
                                                                </svg>
                                                                <span>Выполнен</span>
                                                            </div>
                                                        </div>
                                                        <div class="personal-acc__orders-details">
                                                            <table class="personal-acc__orders-details-item table-descr">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span>Дата получения</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>09.05.2023 после 12:00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span>Самовывоз из магазина</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>Кузнецкий проспект, д. 17</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="personal-acc__orders-details-item personal-acc__orders-view">
                                                                <div class="slider-out basic-slider-wrap">
                                                                    <div class="basic-slider swiper" data-basic-slider-min-gap>
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-1.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-2.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-3.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-4.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-5.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-1.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-2.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-3.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide slide-more">
                                                                                <span>+18</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="personal-acc__orders-details-item personal-acc__orders-review">
                                                                <a class="link link-tdu link-dashed" href="javascript:;">Оставить отзыв</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-acc__orders-info">
                                                        <div class="personal-acc__orders-total">
                                                            <span class="title-line">Сумма заказа:</span>
                                                            <span class="value-line">5 827,99 ₽</span>
                                                        </div>
                                                        <div class="personal-acc__orders-action">
                                                            <div class="personal-acc__orders-status"><span>Заказ не оплачен</span></div>
                                                            <div class="personal-acc__orders-pay">
                                                                <a class="link link-tdu link-dashed" href="javascript:;">Оплатить онлайн</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="personal-acc__orders-item">
                                                    <div class="personal-acc__orders-descr">
                                                        <div class="personal-acc__orders-header">
                                                            <div class="personal-acc__orders-header-title">
                                                                <div class="personal-acc__orders-header-id">
                                                                    <span class="clipboard" data-clipboard>
                                                                        <span class="clipboard-target">А-04588163</span>
                                                                        <span class="clipboard-trigger">
                                                                            <svg class="icon icon-fill">
                                                                                <use href="img/sprite.svg#copy"></use>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="personal-acc__orders-header-date">от 19.04.2023 16:18</div>
                                                            </div>
                                                            <div class="personal-acc__orders-header-status product-availability out-stock">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#cancel"></use>
                                                                </svg>
                                                                <span>Отменён</span>
                                                            </div>
                                                        </div>
                                                        <div class="personal-acc__orders-details">
                                                            <table class="personal-acc__orders-details-item table-descr">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span>Дата получения</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>09.05.2023 после 12:00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span>Самовывоз из магазина</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>Кузнецкий проспект, д. 17</span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="personal-acc__orders-details-item personal-acc__orders-view">
                                                                <div class="slider-out basic-slider-wrap">
                                                                    <div class="basic-slider swiper" data-basic-slider-min-gap>
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-1.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img
                                                                                        loading="lazy"
                                                                                        class="image"
                                                                                        src="img/prod-2.png"
                                                                                        width="48"
                                                                                        height="48"
                                                                                        alt="Изображение блока"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-acc__orders-info">
                                                        <div class="personal-acc__orders-total">
                                                            <span class="title-line">Сумма заказа:</span>
                                                            <span class="value-line">5 827,99 ₽</span>
                                                        </div>
                                                        <div class="personal-acc__orders-action">
                                                            <div class="personal-acc__orders-status"><span>Заказ не оплачен</span></div>
                                                            <div class="personal-acc__orders-pay">
                                                                <a class="link link-tdu link-dashed" href="javascript:;">Оплатить онлайн</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basic-tabs-content__panel" data-id="completed">
                                        <div class="basic-tabs-content__content">3</div>
                                    </div>
                                    <div class="basic-tabs-content__panel" data-id="canceled">
                                        <div class="basic-tabs-content__content">4</div>
                                    </div>
                                </div>
                            </div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
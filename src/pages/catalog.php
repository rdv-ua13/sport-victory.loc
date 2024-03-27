<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xs">
    <div class="container">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
    </div>
</div>

<div class="gap-lg">
	<div class="container">
		<div class="catalog">
			<div class="gap-md">
				<div class="catalog-heading">
					<div class="h2 catalog-heading__title">Беременным и кормящим</div>
					<div class="catalog-heading__goods">&#8212; 184 товара</div>
					<div class="catalog-heading__back">
                        <a class="catalog-heading__back-link" href="javascript:;">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-left"></use>
                            </svg>
                            <span>Витамины и добавки</span>
                        </a>
                    </div>
				</div>
			</div>

			<div class="gap-xl">
				<div class="catalog-category">
					<div class="catalog-sidebar">
						<div class="catalog-sidebar-top">
							<div class="catalog-sidebar-section">
								<div class="catalog-sidebar-section__title">Витамины и добавки</div>
								<ul class="list-reset catalog-sidebar-section__list">
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Аминокислоты</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Для мужчин</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Для женщин</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Для детей</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Беременным и кормящим</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>В сезон простуд</span>
										</a>
									</li>
									<li>
										<a class="catalog-sidebar-section__item link link-primary" href="javascript:;">
											<span>Для спорта</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="catalog-sidebar-filter" data-filter>
							<div class="catalog-sidebar-filter__header">
								<div class="catalog-sidebar-filter__title h4">Фильтр</div>
								<div class="catalog-sidebar-filter__close" data-filter-close>
									<svg class="icon icon-md icon-fill">
										<use href="img/sprite.svg#cross"></use>
									</svg>
								</div>
							</div>
							<form class="catalog-sidebar-filter__selection" action="">
								<ul class="list-reset catalog-sidebar-filter__options">
									<li class="catalog-sidebar-filter__options-item">
										<ul class="list-reset catalog-sidebar-filter__list">
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-0" class="custom-checkbox__input disabled" type="checkbox" name="test1[0]">
                                                    <label for="csf-checkbox-0" class="custom-checkbox__label-for">Новинки</label>
                                                </span>
											</li>
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-1" class="custom-checkbox__input" type="checkbox" name="test1[1]">
                                                    <label for="csf-checkbox-1" class="custom-checkbox__label-for">Акции</label>
                                                </span>
											</li>
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-2" class="custom-checkbox__input" type="checkbox" name="test1[2]">
                                                    <label for="csf-checkbox-2" class="custom-checkbox__label-for">Есть в наличии</label>
                                                </span>
											</li>
										</ul>
									</li>
									<li class="catalog-sidebar-filter__options-item">
										<ul class="list-reset catalog-sidebar-filter__list">
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-10" class="custom-checkbox__input" type="checkbox" name="test2[0]">
                                                    <label for="csf-checkbox-10" class="custom-checkbox__label-for">Новинки</label>
                                                </span>
											</li>
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-11" class="custom-checkbox__input" type="checkbox" name="test2[1]">
                                                    <label for="csf-checkbox-11" class="custom-checkbox__label-for">Акции</label>
                                                </span>
											</li>
											<li class="catalog-sidebar-filter__item">
                                                <span class="custom-checkbox">
                                                    <input id="csf-checkbox-12" class="custom-checkbox__input" type="checkbox" name="test2[2]">
                                                    <label for="csf-checkbox-12" class="custom-checkbox__label-for">Есть в наличии</label>
                                                </span>
											</li>
										</ul>
									</li>
									<li class="catalog-sidebar-filter__options-item">
										<div class="catalog-sidebar-filter__options-header">
											<span class="catalog-sidebar-filter__options-title">Фильтр с чекбоксами</span>
										</div>
										<div class="catalog-sidebar-filter__options-content">
											<div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-search">
                                                <div class="input-wrapper has-icon-r">
                                                    <input
                                                            id=""
                                                            class="input-reset input"
                                                            type="text"
                                                            name=""
                                                            value=""
                                                            placeholder="Найти"
                                                            autocomplete="off"
                                                    >
                                                    <label for="ui-input-search-example-1" class="input-icon input-icon-r c-pointer">
                                                        <svg class="icon icon-sm icon-fill">
                                                            <use href="img/sprite.svg#search"></use>
                                                        </svg>
                                                    </label>
                                                </div>
											</div>
											<div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-content-scrolled spoiler-wrapper">
												<div class="spoiler" data-spoiler data-spoiler-sidebar>
													<div class="spoiler-content">
														<ul class="list-reset catalog-sidebar-filter__list">
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-20" class="custom-checkbox__input" type="checkbox" name="test3[0]">
                                                                    <label for="csf-checkbox-20" class="custom-checkbox__label-for">Антиоксидант</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-21" class="custom-checkbox__input" type="checkbox" name="test3[1]" checked="checked" disabled>
                                                                    <label for="csf-checkbox-21" class="custom-checkbox__label-for">Баланс женских гормонов</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-22" class="custom-checkbox__input" type="checkbox" name="test3[2]" disabled>
                                                                    <label for="csf-checkbox-22" class="custom-checkbox__label-for">Восполнение витаминов и минералов</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-23" class="custom-checkbox__input" type="checkbox" name="test3[3]">
                                                                    <label for="csf-checkbox-23" class="custom-checkbox__label-for">Забота о сердце</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-24" class="custom-checkbox__input" type="checkbox" name="test3[4]">
                                                                    <label for="csf-checkbox-24" class="custom-checkbox__label-for">Защита организма</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-25" class="custom-checkbox__input" type="checkbox" name="test3[5]">
                                                                    <label for="csf-checkbox-25" class="custom-checkbox__label-for">Защита печени</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-26" class="custom-checkbox__input" type="checkbox" name="test3[6]">
                                                                    <label for="csf-checkbox-26" class="custom-checkbox__label-for">Тест</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-26" class="custom-checkbox__input" type="checkbox" name="test3[7]">
                                                                    <label for="csf-checkbox-26" class="custom-checkbox__label-for">Тест</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-26" class="custom-checkbox__input" type="checkbox" name="test3[8]">
                                                                    <label for="csf-checkbox-26" class="custom-checkbox__label-for">Тест</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-26" class="custom-checkbox__input" type="checkbox" name="test3[9]">
                                                                    <label for="csf-checkbox-26" class="custom-checkbox__label-for">Тест</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-checkbox">
                                                                    <input id="csf-checkbox-26" class="custom-checkbox__input" type="checkbox" name="test3[10]">
                                                                    <label for="csf-checkbox-26" class="custom-checkbox__label-for">Тест</label>
                                                                </span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>

                                    <li class="catalog-sidebar-filter__options-item">
                                        <div class="catalog-sidebar-filter__options-header">
                                            <span class="catalog-sidebar-filter__options-title">Цена</span>
                                        </div>
                                        <div class="catalog-sidebar-filter__options-content">
                                            <div class="catalog-sidebar-filter__options-content-item">
                                                <div class="range-slider-wrapper">
                                                    <div class="range-slider-fields">
                                                        <div class="range-slider-fields__item range-slider-fields__from input-wrapper">
                                                            <input
                                                                    id="rsf_min"
                                                                    class="input-reset input range-slider-fields__input"
                                                                    type="text"
                                                                    name="rsf_min"
                                                                    value=""
                                                                    maxlength="100"
                                                                    placeholder=""
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                        <div class="range-slider-fields__item range-slider-fields__to input-wrapper">
                                                            <input
                                                                    id="rsf_max"
                                                                    class="input-reset input range-slider-fields__input"
                                                                    type="text"
                                                                    name="rsf_max"
                                                                    value=""
                                                                    maxlength="100"
                                                                    placeholder=""
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>

                                                    <div id="range-slider" class="range-slider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?/* todo: type=radio - default checked */?>
									<li class="catalog-sidebar-filter__options-item">
										<div class="catalog-sidebar-filter__options-header">
											<span class="catalog-sidebar-filter__options-title">Фильтр с радио кнопками</span>
										</div>
										<div class="catalog-sidebar-filter__options-content">
											<div class="catalog-sidebar-filter__options-content-item catalog-sidebar-filter__options-content-scrolled spoiler-wrapper">
												<div class="spoiler" data-spoiler data-spoiler-sidebar>
													<div class="spoiler-content">
														<ul class="list-reset catalog-sidebar-filter__list">
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-1" class="custom-radio__input" type="radio" name="deliveryPeriod" value="0" checked="checked">
                                                                    <label for="csf-radio-1" class="custom-radio__label-for">Любой</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-2" class="custom-radio__input" type="radio" name="deliveryPeriod" value="1">
                                                                    <label for="csf-radio-2" class="custom-radio__label-for">Сегодня</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-3" class="custom-radio__input" type="radio" name="deliveryPeriod" value="2" disabled>
                                                                    <label for="csf-radio-3" class="custom-radio__label-for">2-4 дня</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-4" class="custom-radio__input" type="radio" name="deliveryPeriod" value="3">
                                                                    <label for="csf-radio-4" class="custom-radio__label-for">3-5 дней</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-5" class="custom-radio__input" type="radio" name="deliveryPeriod" value="4">
                                                                    <label for="csf-radio-5" class="custom-radio__label-for">5-7 дней</label>
                                                                </span>
															</li>
															<li class="catalog-sidebar-filter__item">
                                                                <span class="custom-radio">
                                                                    <input id="csf-radio-6" class="custom-radio__input" type="radio" name="deliveryPeriod" value="5">
                                                                    <label for="csf-radio-6" class="custom-radio__label-for">10-14 дней</label>
                                                                </span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="catalog-sidebar-filter__options-item">
										<div class="catalog-sidebar-filter__options-header">
											<span class="catalog-sidebar-filter__options-title">Фильтр с тегами</span>
										</div>
										<div class="catalog-sidebar-filter__options-content">
											<div class="catalog-sidebar-filter__options-content-item">
                                                <ul class="list-reset catalog-sidebar-filter__list catalog-sidebar-filter__list--row">
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для беребенных</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для волос</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для детей</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для глаз</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для женщин</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для выносливости</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для детоксикации</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для иммунитета</span>
                                                        </label>
                                                    </li>
                                                    <li class="catalog-sidebar-filter__item">
                                                        <label class="tag-wrapper">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="lookingFor[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="tag tag--sm">Для кожи</span>
                                                        </label>
                                                    </li>
                                                </ul>
											</div>
										</div>
									</li>
								</ul>
								<div class="catalog-sidebar-filter__actions">
									<button class="btn-reset btn btn-secondary" type="button" data-filter-results>
										<span class="btn__text">Показать товары</span>
									</button>
									<button class="btn-reset btn btn-light" type="button" data-filter-reset>
										<span class="btn__text">Очистить фильтр</span>
									</button>
								</div>
							</form>
						</div>
					</div>

					<div class="catalog-content">
						<div class="catalog-content__top">
							<div class="catalog-content-settings">
								<div class="catalog-content-settings__sort">
									<div class="catalog-content-settings__sort-title">Сортировать:</div>
									<div class="catalog-content-settings__sort-select">
										<span class="catalog-content-settings__sort-select-text">Сначала недорогие</span>
										<svg class="icon icon-fill">
											<use href="img/sprite.svg#chevron-down"></use>
										</svg>
									</div>
									<div class="catalog-content-settings__sort-options">
                                        <label class="catalog-content-settings__sort-item tag-wrapper">
                                            <input
                                                    id="sortByLowPrice"
                                                    class="visually-hidden"
                                                    type="radio"
                                                    name="sortCatalogCategory[TAGS][]"
                                                    value=""
                                                    checked="checked"
                                            >
                                            <span class="tag">Сначала недорогие</span>
                                        </label>
                                        <label class="catalog-content-settings__sort-item tag-wrapper">
                                            <input
                                                    id="sortByLowPrice"
                                                    class="visually-hidden"
                                                    type="radio"
                                                    name="sortCatalogCategory[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Сначала дорогие</span>
                                        </label>
                                        <label class="catalog-content-settings__sort-item tag-wrapper">
                                            <input
                                                    id="sortByPopular"
                                                    class="visually-hidden"
                                                    type="radio"
                                                    name="sortCatalogCategory[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">Сначала популярные</span>
                                        </label>
									</div>
								</div>
							</div>
                            <?/* add class='has-filter' when selected filter */?>
							<div class="catalog-content-filter-spoiler has-filter" data-filter-spoiler>
								<div class="catalog-content-filter-spoiler__view">
									<svg class="icon icon-sm icon-fill">
										<use href="img/sprite.svg#filter"></use>
									</svg>
								</div>
								<span>Фильтры</span>
							</div>
						</div>
						<div class="catalog-content__layout">
							<div class="gap-md catalog-content__grid">
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-2.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Pump Complex 210 гр</a>
                                            <div class="card__dose">30 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">4 500 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-3.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Нет отзывов</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Omega-3-6-9 с витамином Е 90</a>
                                            <div class="card__dose">90 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">3 850 ₽</div>
                                                    <div class="card__price-origin">4 100 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-4.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-orange">Выносливость</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Gainer</a>
                                            <div class="card__dose">1000 гр</div>
                                            <div class="card__stock product-stock on-order">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-hourglass"></use>
                                                </svg>
                                                <span>Под заказ до 20 дней</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__msg">
                                                <button class="btn-reset btn btn-md btn-light">
                                                    <span class="btn__text">Сообщить о поступлении</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-5.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Creatine</a>
                                            <div class="card__dose">120 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">1 360 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-1.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">61 отзыв</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Multivitamin Daily</a>
                                            <div class="card__dose">60 капсул</div>
                                            <div class="card__stock product-stock coming-soon">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-car"></use>
                                                </svg>
                                                <span>В наличии с 5 февраля</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__msg">
                                                <button class="btn-reset btn btn-md btn-light">
                                                    <span class="btn__text">Сообщить о поступлении</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-2.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Pump Complex 210 гр</a>
                                            <div class="card__dose">30 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">4 500 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-2.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Pump Complex 210 гр</a>
                                            <div class="card__dose">30 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">4 500 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-3.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Нет отзывов</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Omega-3-6-9 с витамином Е 90</a>
                                            <div class="card__dose">90 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">3 850 ₽</div>
                                                    <div class="card__price-origin">4 100 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-4.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-orange">Выносливость</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Gainer</a>
                                            <div class="card__dose">1000 гр</div>
                                            <div class="card__stock product-stock on-order">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-hourglass"></use>
                                                </svg>
                                                <span>Под заказ до 20 дней</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__msg">
                                                <button class="btn-reset btn btn-md btn-light">
                                                    <span class="btn__text">Сообщить о поступлении</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-5.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Creatine</a>
                                            <div class="card__dose">120 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">1 360 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-1.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">61 отзыв</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Multivitamin Daily</a>
                                            <div class="card__dose">60 капсул</div>
                                            <div class="card__stock product-stock coming-soon">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-car"></use>
                                                </svg>
                                                <span>В наличии с 5 февраля</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__msg">
                                                <button class="btn-reset btn btn-md btn-light">
                                                    <span class="btn__text">Сообщить о поступлении</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-2.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Pump Complex 210 гр</a>
                                            <div class="card__dose">30 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">4 500 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-2.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Pump Complex 210 гр</a>
                                            <div class="card__dose">30 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">4 500 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-3.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-green">Для детей</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Нет отзывов</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Omega-3-6-9 с витамином Е 90</a>
                                            <div class="card__dose">90 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">3 850 ₽</div>
                                                    <div class="card__price-origin">4 100 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-4.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-orange">Выносливость</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Gainer</a>
                                            <div class="card__dose">1000 гр</div>
                                            <div class="card__stock product-stock on-order">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-hourglass"></use>
                                                </svg>
                                                <span>Под заказ до 20 дней</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__msg">
                                                <button class="btn-reset btn btn-md btn-light">
                                                    <span class="btn__text">Сообщить о поступлении</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-product" data-card-product>
                                    <div class="card__view">
                                        <img
                                                loading="lazy"
                                                class="image"
                                                src="img/prod-5.png"
                                                alt="Изображение блока"
                                        >
                                        <div class="card__sale-label">
                                            <span class="sale-label sale-label-red">Новинка</span>
                                            <span class="sale-label sale-label-blue">Для мозга</span>
                                        </div>
                                    </div>
                                    <div class="card__descr">
                                        <div class="card__descr-top">
                                            <a class="caption-color fz-sm" href="javascript:;">Sport Victory Nutririon</a>
                                        </div>
                                        <div class="card__descr-info">
                                            <a class="card__title" href="javascript:;">Premium Creatine</a>
                                            <div class="card__dose">120 капсул</div>
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#filled-check"></use>
                                                </svg>
                                                <span>В наличии</span>
                                            </div>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__total">
                                                <div class="card__price">
                                                    <div class="card__price-current">1 360 ₽</div>
                                                </div>
                                                <div class="card__cart">
                                                    <button class="btn-reset btn btn-cart cart-in">
                                                        <svg class="icon icon-fill btn__icon">
                                                            <use href="img/sprite.svg#cart-add"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__act">
                                            <div class="card__act-list">
                                                <button class="btn-reset btn switch-content" data-notice="favorites" title="В избранное">
                                                    <svg class="btn__icon icon icon-stroke icon-default">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                    <svg class="btn__icon icon icon-fill icon-active">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="pagination-wrapper">
								<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
								<div class="pagination-more">
									<button class="btn-reset btn btn-light">
										<span class="btn__text">Показать еще</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-lg">
    <div class="container">
        <div class="svn-about">
            <div class="gap-md">
                <div class="h3">SEO текст с заголовком или без</div>
            </div>
            <div class="spoiler-wrapper">
                <div
                        class="spoiler"
                        data-spoiler
                >
                    <div class="spoiler-content">
                        <p>Магазин не взимает никаких дополнительных комиссий. Все комиссии оплачиваются нашим магазином. Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз ПАО СБЕРБАНК. Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме с использованием протокола шифрования SSL.</p>
                        <p>В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode, MIR Accept, J-Secure для проведения платежа также может потребоваться ввод специального пароля. Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК. Введённая информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-lg">
    <div class="container">
        <div class="svn-benefit">
            <ul class="list-reset card-list">
                <li class="card card-benefit">
                    <div class="card__view" href="javascript:;">
                        <svg class="icon icon-xl icon-fill">
                            <use href="img/sprite.svg#double-cpu-setting"></use>
                        </svg>
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Полностью европейское производство</div>
                        <div class="card__text-content">C контролем качества на каждом этапе</div>
                    </div>
                </li>
                <li class="card card-benefit">
                    <div class="card__view" href="javascript:;">
                        <svg class="icon icon-xl icon-fill">
                            <use href="img/sprite.svg#double-category"></use>
                        </svg>
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Высокое содержание активных компонентов</div>
                        <div class="card__text-content">Позволяет достигать результатов быстрее</div>
                    </div>
                </li>
                <li class="card card-benefit">
                    <div class="card__view" href="javascript:;">
                        <svg class="icon icon-xl icon-fill">
                            <use href="img/sprite.svg#double-box"></use>
                        </svg>
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Быстрая и удобная доставка товаров </div>
                        <div class="card__text-content">В удобное время и место</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
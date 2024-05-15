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
						<div class="h2">Личные данные</div>
					</div>
					<div class="gap-md">
                        <div class="notice">
                            <div class="notice__main">
                                <svg class="icon icon-sm icon-fill">
                                    <use href="img/sprite.svg#user-square"></use>
                                </svg>
                                <span class="notice__text">Не хотите каждый раз заново заполнять данные?</span>
                            </div>
                            <div class="notice__inline-btn">
                                <a class="btn-reset btn btn-md btn-primary" href="javascript:;">
                                    <span class="btn__text">Войдите в профиль</span>
                                </a>
                            </div>
                        </div>
					</div>
                    <div class="gap-md content-wrapper-mobile-section">
                        <div class="cp-item content-wrapper-mobile-section-container">
123
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
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
                                    <span class="text-content">Войдите в профиль</span>
                                </a>
                            </div>
                        </div>
					</div>
                    <div class="gap-md">

                        <form id="" class="personal-acc__data" method="post" action="">
                            <div class="gap-md">
                                <div class="content-wrapper-mobile-section">
                                    <div class="content-wrapper-mobile-section-container">
                                        <div class="personal-acc__data-item">
                                            <div class="gap-xs">
                                                <div class="h4">Личные данные</div>
                                            </div>

                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Аватар</div>
                                                    <div class="content">
                                                        <div class="dropfile js-upload-avatar" data-type="image" data-input-name="UF_AVATAR">
                                                            <label class="dropfile-field js-drop-file">
                                                                <input class="dropfile-input visually-hidden js-change-file" type="file" accept="image/*">
                                                                <div class="dropfile-area">
                                                                    <div class="dropfile-descr">
                                                                        <div class="dropfile-descr__view">
                                                                            <svg class="icon icon-sm icon-fill">
                                                                                <use href="img/sprite.svg#image-plus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropfile-descr">
                                                                    <div class="dropfile-descr__text">
                                                                        <div class="dropfile-descr__title">
                                                                            <span class="link link-red">Нажмите на ссылку</span>,
                                                                            чтобы добавить фотографию или перетащите её в эту область
                                                                        </div>
                                                                        <div class="dropfile-descr__accept">Формат PNG, JPG, JPEG</div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Телефон</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input isPhone"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Номер телефона для уведомлений"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Email</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="email"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Укажите ваш email"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Ваше имя</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder=""
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Ваша фамилия</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder=""
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Дата рождения</div>
                                                    <div class="content">
                                                        <span class="input-wrapper input-wrapper--flatpickr">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input flatpickr"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="__-__-____"
                                                            >
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Ваш пол</div>
                                                    <div class="content">
                                                        <ul class="list-reset">
                                                            <li>
                                                                <span class="custom-radio">
                                                                    <input
                                                                            id="pa-radio-1"
                                                                            class="custom-radio__input"
                                                                            type="radio"
                                                                            name="paGender"
                                                                            value="0"
                                                                            checked="checked"
                                                                    >
                                                                    <label for="pa-radio-1" class="custom-radio__label-for">Мужской</label>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="custom-radio">
                                                                    <input
                                                                            id="pa-radio-2"
                                                                            class="custom-radio__input"
                                                                            type="radio"
                                                                            name="paGender"
                                                                            value="1"
                                                                    >
                                                                    <label for="csf-radio-2" class="custom-radio__label-for">Женский</label>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="btn-wrapper">
                                                        <button class="btn-reset btn btn-primary" type="button">
                                                            <span class="text-content">Сохранить личные данные</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gap-md">
                                <div class="content-wrapper-mobile-section">
                                    <div class="content-wrapper-mobile-section-container">
                                        <div class="personal-acc__data-item">
                                            <div class="gap-xs">
                                                <div class="h4">Сменить пароль</div>
                                            </div>

                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Текущий пароль</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder=""
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Новый пароль</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="+7 999 999-99-99"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="title">Повторите новый пароль</div>
                                                    <div class="content">
                                                        <div class="input-wrapper">
                                                            <input
                                                                    id=""
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="+7 999 999-99-99"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gap-xs personal-acc__data-row">
                                                <div class="personal-acc__data-content">
                                                    <div class="btn-wrapper">
                                                        <button class="btn-reset btn btn-primary" type="button">
                                                            <span class="text-content">Сменить пароль</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="personal-acc__data-item">
                                    <div class="gap-xs">
                                        <div class="h4">Информационные сообщения</div>
                                    </div>

                                    <div class="gap-xs personal-acc__data-row">
                                        <div class="content">
                                            <div class="gap-xxs">
                                                <div class="flex">
                                                    <span class="custom-checkbox">
                                                    <input
                                                            id="pa-infomsg-1"
                                                            class="custom-checkbox__input"
                                                            type="checkbox"
                                                            name="paInfoMsg"
                                                            value="0"
                                                    >
                                                    <label for="pa-infomsg-1" class="custom-checkbox__label-for">Получать информацию о скидках, новинках и выгодных предложениях по E-mail</label>
                                                </span>
                                                </div>
                                            </div>
                                            <div class="gap-xxs">
                                                <div class="flex">
                                                    <span class="custom-checkbox">
                                                    <input
                                                            id="pa-infomsg-2"
                                                            class="custom-checkbox__input"
                                                            type="checkbox"
                                                            name="paInfoMsg"
                                                            value="1"
                                                    >
                                                    <label for="pa-infomsg-2" class="custom-checkbox__label-for">Получать информацию о скидках, новинках и выгодных предложениях по SMS</label>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
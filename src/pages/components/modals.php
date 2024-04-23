<?/* auth */?>
<div id="modal-auth" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Войти в личный кабинет</div>
                <div class="modal__subtitle">
                    Нет аккаунта?
                    <a
                        class="link link-red"
                        href="javascript:;"
                        data-fancybox
                        data-src="#modal-reg"
                    >Зарегистрироваться</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field input-wrapper">
                        <input
                                id=""
                                class="input-reset input"
                                type="email"
                                name=""
                                value=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field input-wrapper has-icon-r">
                        <input
                                id=""
                                class="input-reset input "
                                type="password"
                                name=""
                                value=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn input-icon input-icon-r">
                            <svg class="icon icon-sm icon-fill icon-default">
                                <use href="img/sprite.svg#filled-eye"></use>
                            </svg>
                            <svg class="icon icon-sm icon-fill icon-show">
                                <use href="img/sprite.svg#filled-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>

                        <div class="form__field-ps">
                            <a
                                    class="link link-red fz-caption"
                                    href="javascript:;"
                                    data-fancybox
                                    data-src="#modal-restore"
                            >Напомнить пароль</a>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-secondary" type="submit">
                        <span class="btn__text">Войти</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-ya"></use>
                        </svg>
                    </a>
                    <a class="soc-vk" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a class="soc-ok" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-ok"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* reg */?>
<div id="modal-reg" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Регистрация</div>
                <div class="modal__subtitle">
                    Есть аккаунт?
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field input-wrapper">
                        <input
                                id=""
                                class="input-reset input"
                                type="email"
                                name=""
                                value=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field input-wrapper has-icon-r">
                        <input
                                id=""
                                class="input-reset input "
                                type="password"
                                name=""
                                value=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn input-icon input-icon-r">
                            <svg class="icon icon-sm icon-fill icon-default">
                                <use href="img/sprite.svg#filled-eye"></use>
                            </svg>
                            <svg class="icon icon-sm icon-fill icon-show">
                                <use href="img/sprite.svg#filled-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                    </div>
                    <div class="form__field">
                        <span class="custom-checkbox">
                            <input id="reg-mailing" class="custom-checkbox__input" type="checkbox">
                            <label for="reg-mailing" class="custom-checkbox__label-for caption-color">Подписаться на рассылку акций</label>
                        </span>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-secondary" type="submit">
                        <span class="btn__text">Зарегистрироваться</span>
                    </button>
                </div>
                <div class="form__field-agree fz-caption">
                    Нажимая кнопку «Зарегистрироваться», Вы соглашаетесь с условиями
                    <a class="link link-red" href="javascript:;">политики конфиденциальности</a>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-ya"></use>
                        </svg>
                    </a>
                    <a class="soc-vk" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a class="soc-ok" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#soc-ok"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* restore pass */?>
<div id="modal-restore" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Напомнить пароль</div>
                <div class="modal__subtitle">Введите электронную почту, к которой привязан ваш аккаунт и мы отправим вам новый пароль</div>
                <div>
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field input-wrapper">
                        <input
                                id=""
                                class="input-reset input"
                                type="email"
                                name=""
                                value=""
                                placeholder="Email"
                                required
                        >
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-secondary"
                            type="button"
                            data-fancybox
                            data-src="#modal-restore-final"
                    >
                        <span class="btn__text">Отправить пароль</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modal-restore-final" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon icon-fill icon-red">
                        <use href="img/sprite.svg#filled-lock"></use>
                    </svg>
                    <div class="h4">Мы отправили пароль на вашу почту</div>
                </div>
                <div class="modal__subtitle">Проверьте указанную электронную почту.<br> Если письма нет, то проверьте папку Спам.</div>
                <div>
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>
        </div>
    </div>
</div>
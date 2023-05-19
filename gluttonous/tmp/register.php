<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Обжорозаврик - Приюти и покорми динозаврика");

?>


    <div class="container">
        <div class="card my-4 mx-auto px-0 col-lg-6 col-sm-12">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Регистрация</h4>

                <div class="alert alert-danger" role="alert">
                    При попытке регистрации возникла ошибка
                </div>

                <form>

                    <div class="form-group input-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="" class="form-control is-invalid" placeholder="Ваше имя" type="text">
                            <div class="invalid-feedback">Вы не указали имя</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fingerprint"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Ваш логин" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Ваш Email" type="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class=" input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" placeholder="Введите пароль" type="password">
                        </div>

                        <div class="form-text text-muted">Пароль должен быть не менее 6 символов длиной.</div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" placeholder="Повторите пароль" type="password">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="label" for="captchaWordField">Введите слово с картинки</label>
                        <div class="mb-2"><img src="https://via.placeholder.com/180x40?text=CaPtCHa" alt=""></div>
                        <input name="" class="form-control" type="text" id="captchaWordField" placeholder="...">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
                    </div>

                    <p class="text-center">Уже зарегистрированы? <a href="auth">Авторизоваться</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

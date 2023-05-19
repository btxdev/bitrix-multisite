<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Обжорозаврик - Приюти и покорми динозаврика");

?>


<section>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "1",	// Код информационного блока
		"IBLOCK_TYPE" => "gluttonous",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Слайдер",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ATT_SECTION",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

    </section>

    <div class="container">

        <h1 class="my-4">О динозаврах</h1>


        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/tirannozavr.jpg" alt="Тираннозавр"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Тираннозавр</a>
                        </h4>
                        <p class="card-text">Тиранноза́вр — монотипический род плотоядных динозавров из группы целурозавров подотряда теропод, включающий единственный валидный вид — Tyrannosaurus rex.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/velociraptor_p.jpg" alt="Велоцираптор"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Велоцираптор</a>
                        </h4>
                        <p class="card-text">Велоцира́птор — род хищных двуногих динозавров из семейства дромеозаврид, подсемейства велоцирапторин. Типовой вид — Velociraptor mongoliensis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/triceratops.jpg" alt="Трицератопс"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Трицератопс</a>
                        </h4>
                        <p class="card-text">Трицера́топс — род растительноядных динозавров из семейства цератопсид, существовали в конце маастрихтского века мелового периода и начале палеоценовой эпохи палеогенового периода.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/brontozavr.jpg" alt="Бронтозавр"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Бронтозавр</a>
                        </h4>
                        <p class="card-text">Бронтозавр — род гигантских четвероногих динозавров-завропод, в который включают три вида. Хотя типовой вид, Brontosaurus excelsus, уже давно считается одним из видов близкородственного апатозавра, более поздние исследования показали, что бронтозавр — род, отдельный от Apatosaurus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/pterodaktil.jpg" alt="Птеродактиль"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Птеродактиль</a>
                        </h4>
                        <p class="card-text">Птерода́ктили — род птерозавров, ископаемые остатки которых были обнаружены преимущественно в Зольнхофенских известняках Германии, которые датируются концом юрского периода, 152,1—145 млн лет назад, хотя более фрагментарные ископаемые остатки были найдены в других странах Европы и в Африке.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="dinosaur-item"><img class="card-img-top" src="/images/dinosaurs/parazavrolofus.jpg" alt="Паразавролофус"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="dinosaur-item">Паразавролофус</a>
                        </h4>
                        <p class="card-text">Паразауролофы — род динозавров. Обитали в конце мелового периода, около 76—73 млн лет назад на территории Северной Америки. Окаменелости обнаружены в провинции Альберта в Канаде и Нью-Мексико и Юта в США. Впервые описаны в 1923 году Уильямом Парксом. Учёные относят их к утконосым динозаврам.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 justify-content-center">
            <div class="col-md-4">
                <a class="btn btn-lg btn-outline-primary btn-block" href="dinosaurs">Все динозавры</a>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-6">
                <h2>Обжорозаврик <i class="fas fa-dragon"></i> - это круто</h2>
                <p>На нашем сайте вы можете:</p>
                <ul>
                    <li>
                        <strong>Приютить динозаврика</strong>
                    </li>
                    <li>Узнать о динозаврах побольше</li>
                    <li>Поделится интересным</li>
                    <li>Почитать об историях о домашних динозаврах</li>
                    <li>Купить своему динозаврику покушать или кроватку</li>
                </ul>
                <p>Польный каталог динозавров. Огромный магазин товаров для динозваров. Дружелюбное сообщество любителей динозавров. И свой приют для динозавров - все это <strong>Обжорозаврик</strong>.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img class="img full-width" src="/images/zavri.jpg" alt="Обжорозаврик" width="300" height="300">
            </div>
        </div>


        <hr>

        <h2>Последнее в блоге</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Хищный или травоядный</h4>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Мнение эксперта</h6>
                        <p class="card-text">Вопрос: какого динозаврика взять хищного или травоядного - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>
                        <small class="mt-2 text-muted">Опубликовано вчера</small>
                    </div>
                    <div class="card-footer">
                        <a href="blog-post" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Велоцираптор Веган</h4>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Разное</h6>
                        <p class="card-text">Всякое бывает. Наш велоцираптор ни в какую не хочет кушать мясо. Ни птицу, ни рыбу, вообще ни кусочка. Любит кашу и брокколи. Мы уже давно смирились с этим, а в этой статье я оставлю несколько советов, что делать в такой ситуации.</p>
                        <small class="mt-2 text-muted">Опубликовано вчера</small>
                    </div>
                    <div class="card-footer">
                        <a href="blog-post" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Когда у динозаврика режутся зубки</h4>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Воспитание</h6>
                        <p class="card-text">Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>
                        <small class="mt-2 text-muted">Опубликовано вчера</small>
                    </div>
                    <div class="card-footer">
                        <a href="blog-post" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 justify-content-center">
            <div class="col-md-4">
                <a class="btn btn-lg btn-outline-primary btn-block" href="blog">Перейти в блог</a>
            </div>
        </div>

    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
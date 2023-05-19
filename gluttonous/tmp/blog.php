<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Обжорозаврик - Приюти и покорми динозаврика");

?>


    <div class="container">

        <h1 class="mt-4 mb-3">Блог</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index">Главная</a>
            </li>
            <li class="breadcrumb-item active">Блог</li>
        </ol>

        <div class="row">

            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Хищный или травоядный</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Мнение эксперта</h6>
                        <p class="card-text">Вопрос: какого динозаврика взять хищного или травоядного - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>
                        <a href="blog-post" class="btn btn-primary">Подробнее &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Опубликовано вчера, автор: <a href="#">Профессор Никифор</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <img class="card-img-top" src="/images/blog_vegan.jpeg" alt="Велоцираптор Веган">
                    <div class="card-body">
                        <h2 class="card-title">Велоцираптор Веган</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Разное</h6>
                        <p class="card-text">Всякое бывает. Наш велоцираптор ни в какую не хочет кушать мясо. Ни птицу, ни рыбу, вообще ни кусочка. Любит кашу и брокколи. Мы уже давно смирились с этим, а в этой статье я оставлю несколько советов, что делать в такой ситуации.</p>
                        <a href="blog-post" class="btn btn-primary">Подробнее &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Опубликовано три дня назад, автор: аноним
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Когда у динозаврика режутся зубки</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Воспитание</h6>
                        <p class="card-text">Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>
                        <a href="blog-post" class="btn btn-primary">Подробнее &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Опубликовано неделю назад, автор: аноним
                    </div>
                </div>

                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Назад">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Назад</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Вперед">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Вперед</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="col-md-4">

                <div class="card mb-4">
                    <h5 class="card-header">Найти в блоге</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <h5 class="card-header">Темы</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="blog">Воспитание</a>
                                    </li>
                                    <li>
                                        <a href="blog">Мнение эксперта</a>
                                    </li>
                                    <li>
                                        <a href="blog">Разное</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

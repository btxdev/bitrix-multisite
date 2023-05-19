<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Обжорозаврик - Приюти и покорми динозаврика");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Обжорозаврик - Приюти и покорми динозаврика");

?>


    <div class="container">

        <h1 class="mt-4 mb-3">Динозавры</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index">Главная</a>
            </li>
            <li class="breadcrumb-item active">Динозавры</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Поиск...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 portfolio-item">
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
            <div class="col-lg-6 portfolio-item">
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
            <div class="col-lg-6 portfolio-item">
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
            <div class="col-lg-6 portfolio-item">
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
            <div class="col-lg-6 portfolio-item">
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
            <div class="col-lg-6 portfolio-item">
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
</div>

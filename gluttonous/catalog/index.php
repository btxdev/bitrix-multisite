<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Каталог");
$APPLICATION->SetTitle("Каталог");

?>


    <div class="container">

        <h1 class="mt-4 mb-3">Каталог
            <small>Корм</small>
        </h1>

        <!-- Навигационная цепочка -->
        <ol class="breadcrumb">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "universal",
                Array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            );
            ?>
        </ol>

        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Корм</a>
                    <a href="#" class="list-group-item">Миски</a>
                    <a href="#" class="list-group-item">Кроватки</a>
                    <a href="#" class="list-group-item">Вольеры</a>
                    <a href="#" class="list-group-item">Одежда</a>
                    <a href="#" class="list-group-item">Аксессуары</a>
                </div>
            </div>

            <div class="col-lg-9 mb-4">
                <h2>Корм</h2>
                <p>Каталог товаров находится в стадии разработки.</p>
            </div>
        </div>

    </div>
</div>

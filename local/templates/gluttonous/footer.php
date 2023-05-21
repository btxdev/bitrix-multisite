<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

?>


<footer class="py-5 bg-dark">

    <?
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_THEME" => "site",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "footer"
            ),
            false
        );
    ?>

    <!-- верстка -->
    <div class="container">
        <p class="m-0 text-center text-white">
            Copyright &copy; Обжорозаврик 2020.
            Создано для проекта <a href="https://bitrixcasts.ru" rel="nofollow" target="_blank">BitrixCasts</a>.
            Автор <a href="https://mvsvolkov.ru" rel="nofollow" target="_blank">Волков Михаил</a> <i
                class="fas fa-heart text-danger"></i>
        </p>
    </div>

</footer>
</body>
</html>
<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/bootstrap/css/bootstrap.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/jquery.fancybox/jquery.fancybox.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/fontawesome-free/css/all.css');

$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/jquery/jquery.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/jquery.fancybox/jquery.fancybox.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/script.js');

?>


<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $APPLICATION->ShowHead() ?>

    <title><?php $APPLICATION->ShowTitle() ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">

</head>

<body>

    <?php $APPLICATION->ShowPanel() ?>

    <div class="main-wrapper" id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index">Обжорозаврик <i class="fas fa-dragon"></i></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Шапка -->
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                        <!-- Динамические элементы меню -->
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "header",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_THEME" => "site",
                                "ROOT_MENU_TYPE" => "header",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "header"
                            ),
                            false
                        );
                        ?>

                    </ul>

                </div>

            </div>
        </nav>
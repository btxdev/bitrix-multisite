<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

$APPLICATION->setTitle('HELLO');

?>

<div class="container">

	<h1 class="mt-4 mb-3">Динозавр:
		<small><?= $arResult["NAME"] ?></small>
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

		<!-- Картинка -->
		<div class="col-md-8 text-center">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
				<a href="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" data-fancybox data-caption="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
					<img class="img-fluid" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
				</a>
			<?endif?>
		</div>

		<?
			dd($arResult);
		?>

		<!-- Карточка динозавра -->
		<div class="col-md-4">
			<h3 class="my-3"><?= $arResult["NAME"] ?></h3>
			<p><?= $arResult["PREVIEW_TEXT"] ?></p>
			<h3 class="my-3">Особенности динозавра</h3>
			<ul>
				<li><b>Латинское название</b>: NONE</li>
				<li><b>Рост</b>: NONE</li>
				<li><b>Масса</b>: NONE</li>
				<li><b>Скорость</b>: NONE</li>
				<li><b>Продолжительность жизни</b>: NONE</li>
			</ul>
		</div>


	</div>

	<hr>

	<h3 class="my-4">О динозавре</h3>
	<div class="row">
		<div class="col-md-12">
			<?= $arResult["DETAIL_TEXT"] ?>
		</div>
	</div>

	<br>
	<br>

</div>
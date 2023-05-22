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

?>

<h1 class="my-4">О динозаврах</h1>

<!-- блок с динозаврами -->
<div class="row">

	<!-- динозавры -->
	<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
		$title = '';
		$description = '';
		$image = '';
		$itemUrl = '';

		if(isset($arItem['NAME'])) $title = $arItem['NAME'];
		if(isset($arItem['PREVIEW_TEXT'])) $description = $arItem['PREVIEW_TEXT'];
		if(isset($arItem['PREVIEW_PICTURE'])) {
			if (is_array($arItem['PREVIEW_PICTURE'])) {
				if (isset($arItem['PREVIEW_PICTURE']['SRC'])) {
					$image = $arItem['PREVIEW_PICTURE']['SRC'];
				}
			}
			else {
				$image = $arItem['PREVIEW_PICTURE'];
			}
		}
		if(isset($arItem['DETAIL_PAGE_URL'])) {
			$itemUrl = $arItem['DETAIL_PAGE_URL'];
		}
	?>

	<div class="col-lg-4 col-sm-6 portfolio-item">
		<div class="card h-100">
			<a href="<?= $itemUrl ?>"><img class="card-img-top" src="<?= $image ?>" alt="<?= $title ?>"></a>
			<div class="card-body">
				<h4 class="card-title">
					<a href="<?= $itemUrl ?>"><?= $title ?></a>
				</h4>
				<p class="card-text"><?= $description ?></p>
			</div>
		</div>
	</div>

	<?endforeach;?>

</div>

<!-- кнопка -->
<div class="row mb-4 justify-content-center">
	<div class="col-md-4">
		<a class="btn btn-lg btn-outline-primary btn-block" href="dinosaurs/">Все динозавры</a>
	</div>
</div>
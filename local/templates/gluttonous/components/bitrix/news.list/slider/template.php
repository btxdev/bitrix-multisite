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

<!-- слайдер -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

	<!-- страницы навигации -->
    <ol class="carousel-indicators">

		<?for($i = 0; $i < count($arResult["ITEMS"]); $i++):?> 

			<? $arItem = $arResult["ITEMS"][$i]; ?>
			<? $className = $i == 0 ? "active" : ""; ?>

			<li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $className ?>"></li>

		<?endfor;?>

    </ol>

	<!-- слайды -->
    <div class="carousel-inner" role="listbox">

		<? $className = "active"; ?>

		<?foreach($arResult["ITEMS"] as $arItem):?>

			<?

			$this->AddEditAction(
				$arItem['ID'], 
				$arItem['EDIT_LINK'], 
				CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
			);
			$this->AddDeleteAction(
				$arItem['ID'], 
				$arItem['DELETE_LINK'], 
				CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), 
				array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
			);

			$id = $arItem['ID'];
			$title = '';
			$description = '';
			$imageUrl = '';
			$btnUrl = '';

			foreach($arItem["FIELDS"] as $code => $value) {
				if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]) {
					$title = $arItem["NAME"];
				}

				if($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) {
					$description = $arItem["PREVIEW_TEXT"];
				}

				if($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) {
					$imageUrl = $arItem["PREVIEW_PICTURE"]["SRC"];
				}
			}

			foreach($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) {
				if ($arProperty["CODE"] == "ATT_SECTION") {
					if(is_array($arProperty["DISPLAY_VALUE"])) {
						$btnUrl = implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
					}
					else {
						$btnUrl = $arProperty["DISPLAY_VALUE"];
					}
				}
			}

			?>

			<div class="carousel-item <?= $className ?>" style="background-image: url('<?= $imageUrl ?>')">
				<div class="carousel-caption d-none d-md-block">
					<h3><?= $title ?></h3>
					<hr class="border-light">
					<div>
						<p><?= $description ?></p>
						<hr class="border-light">
						<p><a class="btn btn-info" href="<?= $btnUrl ?>">Подробнее</a></p>
					</div>
				</div>
			</div>

			<? $className = ""; ?>

		<?endforeach;?>
	</div>

	<!-- кнопки навигации -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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

if (empty($arResult)) return;

CUtil::InitJSCore();

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css')) {
    $APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');
}

$menuBlockId = "catalog_menu_".$this->randString();

?>


<div class="container text-center mb-4">

	<div class="row">

	<?foreach($arResult as $arItem):?> 

		<?
		if (!isset($arItem['TEXT']) || !isset($arItem['LINK'])) continue;
		?>

		<div class="col-md-4">
			<a href="<?= $arItem['LINK'] ?>" class="text-white"><?= $arItem['TEXT'] ?></a>
		</div>

	<?endforeach;?>

	</div>

</div>


<script>
	BX.ready(function () {
		window.obj_<?=$menuBlockId?> = new BX.Main.MenuComponent.CatalogHorizontal('<?=CUtil::JSEscape($menuBlockId)?>', <?=CUtil::PhpToJSObject($arResult["ITEMS_IMG_DESC"])?>);
	});
</script>
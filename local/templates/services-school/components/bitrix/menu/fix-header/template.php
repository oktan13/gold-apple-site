<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="fix-header__menu">
    <nav class="fix-header__menu-nav">
        <?php foreach($arResult as $key => $arItem):?>
            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <?php endforeach;?>
    </nav>
    <button data-popup="open-popup" href="#popupFeedback" class="button button--transparent-black">Заказать звонок</button>
</div>
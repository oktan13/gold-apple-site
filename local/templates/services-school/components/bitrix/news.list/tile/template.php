<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="swiper tile" data-tile="swiper">
    <div class="swiper-wrapper tile__wrapper">
        <?php foreach ($arResult['ITEMS'] as $item):?>
        <div class="swiper-slide tile__item">
            <?php if($item['PROPERTIES']['ICON']['VALUE']):?>
                <img src="<?=$item['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC']?>" alt="..." class="tile__item-img">
            <?php endif;?>
            <p>
                <?php if($item['~PREVIEW_TEXT']):?>
                    <?=$item['~PREVIEW_TEXT']?>
                <?php endif;?>
            </p>
        </div>
        <?php endforeach;?>
    </div>
</div>

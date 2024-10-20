<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="modules">
    <img class="modules__logo" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo-left.svg" alt="...">
    <?php foreach ($arResult['ITEMS'] as $key => $item):?>
    <div class="modules__item <?php if(($key + 1) % 2 === 0):?>modules__item--active<?php endif;?>">
        <div class="row">
            <div class="col-12 col-md-3 col-xxl-5 modules__item-head">
                <div class="modules__item-num"><?=$item['NAME'];?></div>
                <p class="big-txt modules__item-name">
                    <?php if($item['PROPERTIES']['TITLE']['VALUE']):?>
                        <?=$item['PROPERTIES']['TITLE']['~VALUE']?>
                    <?php endif;?>
                </p>
            </div>
            <div class="col-12 col-md-9 col-xxl-7 d-block d-md-flex modules__item-list">
                <?php if($item['PROPERTIES']['LIST']['VALUE']):?>
                    <?php foreach ($item['PROPERTIES']['LIST']['~VALUE'] as $key => $listItem):?>
                        <?php if ($key === 0):?>
                            <div class="modules__item-list-column">
                        <?php endif;?>
                        <div class="modules__item-list-item">
                            <span><?=($key + 1);?>.</span>
                            <p><?=$listItem;?></p>
                        </div>
                        <?php if(($key + 1) === count($item['PROPERTIES']['LIST']['~VALUE'])): ?>
                            </div>
                        <?php endif;?>
                        <?php if (($key + 1) % 4 === 0 && ($key + 1) !== count($item['PROPERTIES']['LIST']['~VALUE'])):?>
                            </div>
                            <div class="modules__item-list-column">
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php endforeach;?>

<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<section id="aboutСourse" data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-xl">
        <h2 class="mb-30"><span>Для кого</span> этот курс: </h2>
        <div class="for-whom">
            <?php foreach ($arResult['ITEMS'] as $item):?>
                <div data-popup="open-popup" href="#for-whom-modal<?=$item['ID']?>" class="for-whom__item">
                    <div class="for-whom__item-stick">
                        <?=$item['NAME'];?>
                    </div>
                    <div class="for-whom__item-more">
                        <p>Какие выгоды от курса:</p>
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/arrow-right-white.svg" alt="...">
                    </div>
                    <img class="for-whom__item-poster" src="<?=$item['PREVIEW_PICTURE']['SRC'];?>" alt="...">
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php foreach ($arResult['ITEMS'] as $item):?>
    <div class="popup" id="for-whom-modal<?=$item['ID']?>">
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__close-btn popup__close-btn--dark" data-popup="close-popup"><i class="icon-cross"></i></div>
                <div class="popup__wrap">
                    <p class="big-txt text-center mb-1 popup__title">
                        <?php if($item['PROPERTIES']['MODAL_TITLE']['~VALUE']['TEXT']):?>
                            <?=$item['PROPERTIES']['MODAL_TITLE']['~VALUE']['TEXT']?>
                        <?php endif;?>
                    </p>
                    <?php if($item['PROPERTIES']['MODAL_SUB_TITLE']['VALUE']):?>
                        <p class="text-center mb-4 popup__sub-title"><?=$item['PROPERTIES']['MODAL_SUB_TITLE']['VALUE']?></p>
                    <?php endif;?>
                    <?php if($item['PROPERTIES']['MODAL_LIST']['VALUE']):?>
                    <ul class="popup__list">
                        <?php foreach($item['PROPERTIES']['MODAL_LIST']['VALUE'] as $listItem):?>
                        <li><?=$listItem;?></li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <button class="button button--full mb-2">Записаться на курс</button>
                    <button data-popup="open-popup" href="#popupFeedback" class="button button--transparent-purple button--full">Заказать звонок</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
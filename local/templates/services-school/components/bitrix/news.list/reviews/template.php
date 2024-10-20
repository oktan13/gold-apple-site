<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="review__wrap position-relative">
    <div class="review-swiper-buttons">
        <div class="swiper-btn-next">
            <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84618 1.68621C6.14815 2.07649 10.3138 3.37251 14.1159 5.36073L14.7218 4.04262C10.3441 5.92774 5.85278 7.28268 1.24785 8.52715C0.823712 8.64497 -0.123029 9.0058 0.0133015 9.58754C0.149632 10.1693 1.24785 9.98518 1.62654 9.91154C6.52685 8.93216 11.3514 7.20904 15.9185 5.25027C16.3729 5.05145 17.3424 4.36662 16.5244 3.93216C12.3436 1.73776 7.75382 0.449097 3.02771 0.00727057C2.38393 -0.0516396 1.3766 0.250275 1.02063 0.809922C0.634362 1.42111 1.35388 1.63466 1.84618 1.67885V1.68621Z" fill="white"/>
            </svg>
        </div>
    </div>
    <div class="swiper review" data-review="swiper">
        <div class="swiper-wrapper review__wrapper">
            <?php foreach($arResult['ITEMS'] as $item):?>
            <div class="swiper-slide speakers__item">
                <div class="speakers__item-img">
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="..." >
                </div>
                <div class="speakers__item-info">
                    <p class="speakers__item-name--md mb-20">
                        <?=$item['NAME']?>
                    </p>
                    <p class="mb-20">
                        <span>
                            <b><?=$item['PROPERTIES']['RESULT']['VALUE']?></b>
                        </span>
                    </p>
                    <p><?=$item['PROPERTIES']['FEEDBACK']['VALUE']['TEXT']?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
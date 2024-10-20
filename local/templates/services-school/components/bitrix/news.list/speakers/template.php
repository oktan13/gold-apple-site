<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="swiper speakers" data-speakers="swiper">
    <div class="speakers-swiper-buttons">
        <div class="swiper-btn-prev">
            <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1538 1.68621C10.8518 2.07649 6.68621 3.37251 2.88411 5.36073L2.2782 4.04262C6.65591 5.92774 11.1472 7.28268 15.7522 8.52715C16.1763 8.64497 17.123 9.0058 16.9867 9.58754C16.8504 10.1693 15.7522 9.98518 15.3735 9.91154C10.4731 8.93216 5.64858 7.20904 1.08152 5.25027C0.62709 5.05145 -0.342371 4.36662 0.475611 3.93216C4.6564 1.73776 9.24618 0.449097 13.9723 0.00727057C14.6161 -0.0516396 15.6234 0.250275 15.9794 0.809922C16.3656 1.42111 15.6461 1.63466 15.1538 1.67885V1.68621Z" fill="white"/>
            </svg>
        </div>
        <div class="swiper-btn-next">
            <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84618 1.68621C6.14815 2.07649 10.3138 3.37251 14.1159 5.36073L14.7218 4.04262C10.3441 5.92774 5.85278 7.28268 1.24785 8.52715C0.823712 8.64497 -0.123029 9.0058 0.0133015 9.58754C0.149632 10.1693 1.24785 9.98518 1.62654 9.91154C6.52685 8.93216 11.3514 7.20904 15.9185 5.25027C16.3729 5.05145 17.3424 4.36662 16.5244 3.93216C12.3436 1.73776 7.75382 0.449097 3.02771 0.00727057C2.38393 -0.0516396 1.3766 0.250275 1.02063 0.809922C0.634362 1.42111 1.35388 1.63466 1.84618 1.67885V1.68621Z" fill="white"/>
            </svg>
        </div>
    </div>
    <div class="swiper-wrapper speakers__wrapper">
        <?php foreach ($arResult['ITEMS'] as $key => $item):?>
            <div class="swiper-slide speakers__item <?php if(($key + 1) % 2 === 0):?>speakers__item--out<?php endif;?>">
                <div class="speakers__item-img">
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC'];?>" alt="..." >
                </div>
                <div class="speakers__item-info">
                    <p class="big-txt speakers__item-name mb-20 mb-md-15"><?=$item['NAME'];?></p>
                    <ul class="speakers__item-about-list">
                        <?php foreach ($item['PROPERTIES']['DESC']['~VALUE'] as $descItem):?>
                            <li><?=$descItem;?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="accordion faq row">
    <?php $countItems = count($arResult['ITEMS']);?>
    <?php $columnItems = ceil($countItems / 2);?>
    <?php foreach($arResult['ITEMS'] as $key => $item):?>
        <?php if ($key === 0):?>
            <div class="col-12 col-lg-6 faq__col">
        <?php endif;?>
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$key;?>" aria-expanded="true" aria-controls="collapse<?=$key;?>">
                        <?=$item['NAME']?>
                    </button>
                </div>
                <div id="collapse<?=$key;?>" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>
                            <?=$item['DETAIL_TEXT']?>
                        </p>
                    </div>
                </div>
            </div>
        <?php if(($key + 1) === $countItems): ?>
            </div>
        <?php endif;?>
        <?php if (($key + 1) % $columnItems === 0 && ($key + 1) !== $countItems):?>
            </div>
            <div class="col-12 col-lg-6 faq__col">
        <?php endif;?>
    <?php endforeach;?>
</div>

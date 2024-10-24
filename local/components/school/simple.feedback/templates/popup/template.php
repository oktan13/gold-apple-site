<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="popup__wrap">
    <p class="big-txt text-center mb-1 popup__title">ЗАКАЗАТЬ <span>ЗВОНОК</span></p>
    <p class="text-center mb-3 mb-lg-4 popup__sub-title">Оставьте контактный телефон и мы вам перезвоним</p>
    <form action="<?=POST_FORM_ACTION_URI?>" method="POST" name="form-feedback">
        <?=bitrix_sessid_post()?>
        <div class="form__input-wrap mb-3">
            <div class="form__input-name">Имя</div>
            <div>
                <input class="form__input" name="user_name" value="<?=$arResult["AUTHOR"]?>" inputmode="text" required="" placeholder="Введите ваше имя">
            </div>
        </div>
        <div class="form__input-wrap mb-5">
            <div class="form__input-name">Телефон</div>
            <div data-mask="+7 (999) 999-99-99">
                <input type="tel" class="form__input" placeholder="+7 (___) ___-__-__" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" inputmode="text" required="">
            </div>
        </div>
        <button type="submit" name="submit" value="feedback" class="button button--full">Отправить</button>
    </form>
    <?php
    if(!empty($arResult["ERROR_MESSAGE"])) {
        foreach($arResult["ERROR_MESSAGE"] as $v) {
            echo "<div style='color: #be2b2b;margin-top: 20px;text-align: left;'>" . $v . "</div>";
        }
    }
    ?>
</div>

<?php if($arResult["OK_MESSAGE"] <> ''):?>
    <script>
        window.popup.open('#popupFeedbackSuccess');
    </script>
<?php endif;?>
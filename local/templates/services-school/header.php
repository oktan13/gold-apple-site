<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php $APPLICATION->ShowHead();?>
        <title><?php $APPLICATION->ShowTitle();?></title>
        <?php
        //Стили сайта
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/css/index.css");
        $APPLICATION->SetAdditionalCSS("https://unpkg.com/aos@2.3.1/dist/aos.css");

        //Скрипты сайта
        $APPLICATION->AddHeadScript("https://unpkg.com/aos@2.3.1/dist/aos.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/js/main.js");
        ?>
    </head>
    <body>
        <?php $APPLICATION->ShowPanel();?>

        <div class="fix-header">
            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo-fix-header.svg" alt="...">
            <?php
                $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "fix-header",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                ));
            ?>
        </div>
        <section class="home-header">
            <div class="home-header__video-wrap">
                <video playsinline="playsinline" muted="muted" autoplay="autoplay" loop="loop">
                    <source src="<?=SITE_TEMPLATE_PATH;?>/assets/videos/learning.mp4" type="video/mp4"/>
                    Ваш браузер не поддерживает элемент video.
                </video>
            </div>
            <header class="header">
                <div class="header__logo">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo.svg" alt="logo">
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    ));
                ?>
            </header>
            <div class="home-header__info-wrap" data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
                <div class="home-header__info">
                    <div class="home-header__info-heading">
                        <div class="home-header__info-sticker">
                            <p class="home-header__info-sticker-title">Только для <br>сферы услуг</p>
                        </div>
                        <h1><?php
                            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/header/heading.php", [],
                                [
                                    "MODE" => "html",
                                    "NAME" => "Заголовок"
                                ]);
                            ?></h1>
                    </div>
                    <div class="home-header__mobile-video-wrap">
                        <video playsinline="playsinline" muted="muted" autoplay="autoplay" loop="loop">
                            <source src="<?=SITE_TEMPLATE_PATH;?>/assets/videos/learning.mp4" type="video/mp4"/>
                            Ваш браузер не поддерживает элемент video.
                        </video>
                    </div>
                    <div class="home-header__info-record">
                        <p><?php
                            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/header/info-record.php", [],
                                [
                                    "MODE" => "html",
                                    "NAME" => "Информация о записи"
                                ]);
                            ?></p>
                        <a href="#price" class="button w-100">Записаться на курс</a>
                    </div>
                </div>
            </div>
        </section>

        <main class="main-container">

    </body>
</html>
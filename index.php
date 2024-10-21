<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Школа высокого сервиса «Золотой стандарт»");
?>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="big-txt-wrap text-center">
        <p class="big-txt">
            <?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/text/info1.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Текст"
                ]);
            ?>
        </p>
    </div>
</section>

<?php
    $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "for-whom",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "services_school",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "40",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("MODAL_TITLE", "MODAL_SUB_TITLE", "MODAL_LIST"),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true" id="about">
    <div class="container-xl">
        <div class="column-info row">
            <div class="column-info__heading-wrap col-lg-5">
                <h2><?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/about/title.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "Заголовок"
                        ]);
                    ?></h2>
            </div>
            <div class="column-info__desc col-lg-7">
                <p>
                    <?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/about/desc.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "Текст"
                        ]);
                    ?>
                </p>
            </div>
        </div>

        <div class="numbers row justify-content-center justify-content-lg-start">
            <div class="numbers__item col-6 col-md-5">
                <?php
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/about/num1.php", [],
                    [
                        "MODE" => "html",
                        "NAME" => "Текст"
                    ]);
                ?>
            </div>
            <div class="numbers__item col-6 col-md-4">
                <?php
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/about/num2.php", [],
                    [
                        "MODE" => "html",
                        "NAME" => "Текст"
                    ]);
                ?>
            </div>
            <div class="numbers__item col-12 col-sm-6 col-md-3">
                <?php
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/about/num3.php", [],
                    [
                        "MODE" => "html",
                        "NAME" => "Текст"
                    ]);
                ?>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-xl">
        <h2 class="text-center mb-30"><?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/tile/title.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Заголовок"
                ]);
            ?></h2>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "tile",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "services_school",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "40",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("ICON"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container text-center">
        <h2 class="mb-20"><?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/text/title2.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Заголовок"
                ]);
            ?></h2>
        <p class="mb-20">
            <?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/text/info2.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Текст"
                ]);
            ?>
        </p>
        <a href="#price" class="mx-auto button button--middle">Записаться на курс</a>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true" id="program">
    <div class="container-xl">
        <div class="row">
            <div class="col-12 col-xxl-3 mb-4 mb-xxl-0">
                <h2><?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/program/title.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "Заголовок"
                        ]);
                    ?></h2>
            </div>
            <div class="col-12 col-xxl-9">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "modules",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "8",
                        "IBLOCK_TYPE" => "services_school",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "40",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("TITLE", "LIST"),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true" id="price">
    <div class="container-xl">
        <h2 class="text-center mb-30">
            <?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/tariffs/title.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Заголовок"
                ]);
            ?>
        </h2>
        <div class="tariffs row">
            <div class="col-12 col-md-6">
                <div class="tariffs__item">
                    <div class="tariffs__heading">
                        <p class="big-txt tariffs__heading-title">
                            Тариф <br class="d-inline d-xl-none"><i>«ИНДИВИДУАЛЬНЫЙ»</i>
                        </p>
                        <p class="tariffs__heading-sub-title">
                            Предложение для администраторов <br>и мастеров
                        </p>
                    </div>
                    <div class="tariffs__info">
                        <div class="tariffs__price-box">
                            <div class="tariffs__discount">
                                <span class="tariffs__old-price">13 990 ₽</span>
                                <span class="tariffs__discount-percent">-25%</span>
                            </div>
                            <div class="tariffs__price">
                                От <i>9 900 ₽</i>
                            </div>
                            <p>Обучайтесь высокому сервису выгодно: сами или с коллегой.</p>
                        </div>
                        <a href="https://get.highserviceschool.ru/gold_pay" class="button button--full">Записаться на курс со скидкой</a>
                    </div>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/tariff-1.svg" alt="..." class="tariffs__ico tariffs__ico--flag">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="tariffs__item tariffs__item--active">
                    <div class="tariffs__heading">
                        <p class="big-txt tariffs__heading-title">
                            Тариф <br class="d-inline d-xl-none"><i>«Командный»</i>
                        </p>
                        <p class="tariffs__heading-sub-title">
                            Предложение для собственников <br>и управляющих бизнеса в сфере услуг
                        </p>
                    </div>
                    <div class="tariffs__info">
                        <div class="tariffs__price-box">
                            <div class="tariffs__discount">
                                <span class="tariffs__old-price">49 990 ₽</span>
                                <span class="tariffs__discount-percent">-25%</span>
                            </div>
                            <div class="tariffs__price">
                                От <i>39 900 ₽</i>
                            </div>
                            <p>Обучайтесь высокому сервису выгодно: сами или с коллегой.</p>
                        </div>
                        <button class="button button--full button--white" data-popup="open-popup" href="#popupCommandTariff">Записаться на курс со скидкой</button>
                    </div>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/tariff-2.svg" alt="..." class="tariffs__ico tariffs__ico--heart">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-xl">
        <h2 class="mb-30"><?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/targets/title.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Заголовок"
                ]);
            ?></h2>
        <div class="numbers numbers--col row">
            <div class="numbers__item numbers__item--col col-12 col-sm-6 col-lg-4">
                <div class="numbers__item-value">
                    01
                </div>
                <div class="numbers__item-desc text-start">
                    <?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/targets/desc1.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "текст"
                        ]);
                    ?>
                </div>
            </div>
            <div class="numbers__item numbers__item--col col-12 col-sm-6 col-lg-4">
                <div class="numbers__item-value">
                    02
                </div>
                <div class="numbers__item-desc text-start">
                    <?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/targets/desc2.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "текст"
                        ]);
                    ?>
                </div>
            </div>
            <div class="numbers__item numbers__item--col col-12 col-sm-6 col-lg-4">
                <div class="numbers__item-value">
                    03
                </div>
                <div class="numbers__item-desc text-start">
                    <?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/targets/desc3.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "текст"
                        ]);
                    ?>
                </div>
            </div>
        </div>
        <picture>
            <source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/terget-md.jpg" media="(max-width: 768px)">
            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/target.jpg" alt="наша цель" class="target-img">
        </picture>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-lg text-center">
        <h2 class="mb-20"><?php
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/text/title3.php", [],
                [
                    "MODE" => "html",
                    "NAME" => "Заголовок"
                ]);
            ?></h2>
        <a href="#price" class="mx-auto button button--middle">Записаться на курс</a>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true" id="speakers">
    <div class="container-xl">
        <div class="row mb-4">
            <div class="col-12 col-md-7 col-lg-4 mb-3 mb-lg-0">
                <h2><?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/speakers/title.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "Заголовок"
                        ]);
                    ?></h2>
            </div>
            <div class="col-12 col-sm-7 col-lg-4">
                <p><?php
                    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/speakers/desc.php", [],
                        [
                            "MODE" => "html",
                            "NAME" => "описание"
                        ]);
                    ?></p>
            </div>
        </div>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "speakers",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "services_school",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "40",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("TITLE", "LIST"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "PARENT_SECTION" => "5",
            )
        );?>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-xl">
        <div class="text-start text-lg-center mb-30">
            <h2 class="heading-ico--star"><?php
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/chunks/experts/title.php", [],
                    [
                        "MODE" => "html",
                        "NAME" => "Заголовок"
                    ]);
                ?></h2>
        </div>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "speakers",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "services_school",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "40",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("TITLE", "LIST"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "PARENT_SECTION" => "6",
            )
        );?>
    </div>
</section>

<section data-aos="fade-in" data-aos-duration="1500" data-aos-once="true">
    <div class="container-xl">
        <h2 class="mb-30">Отзывы</h2>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "reviews",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "10",
                "IBLOCK_TYPE" => "services_school",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "40",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("RESULT", "FEEDBACK"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
            )
        );?>
    </div>
</section>

<section id="faq">
    <div class="container-xl">
        <h2 class="text-center mb-30">FAQ</h2>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "faq",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "11",
                "IBLOCK_TYPE" => "services_school",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "40",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
            )
        );?>
    </div>
</section>

<section>
    <div class="container text-center">
        <h2 class="mb-20">Записаться <span>на курс</span></h2>
        <div class="d-block d-md-flex justify-content-center">
            <a href="https://get.highserviceschool.ru/gold_pay" class="button button--small mb-3 mb-md-0 me-md-1">Тариф «ИНДИВИДУАЛЬНЫЙ»</a>
            <button data-popup="open-popup" href="#popupCommandTariff" class="button button--small button--white ms-1">Тариф «КОМАНДНЫЙ»</button>
        </div>
    </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
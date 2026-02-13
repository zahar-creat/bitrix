<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$isHomePage = $APPLICATION->GetCurPage(false) === '/';
$bannerAlt = $APPLICATION->GetTitle(false);
if ($bannerAlt === '') {
    $bannerAlt = 'Баннер';
}
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="<?=LANG_CHARSET?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $APPLICATION->ShowHead(); ?>
    <link href="<?= SITE_TEMPLATE_PATH ?>/styles.css" rel="stylesheet">
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="page<?= $isHomePage ? '' : ' inner' ?>">
    <?php if (!$isHomePage): ?>
        <img
            src="<?= htmlspecialcharsbx($APPLICATION->GetPageProperty('BANNER_IMAGE') ?: SITE_TEMPLATE_PATH . '/layout/img/page-1-banner.png') ?>"
            class="banner"
            alt="<?= htmlspecialcharsbx($bannerAlt) ?>"
        />
    <?php endif; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 no-padding contacts-column">
                    <div class="contact-content">
                        <div class="contacts-wrap address">
                            <div class="title">Адрес</div>
                            <div class="contact">
                                <?php
                                $APPLICATION->IncludeFile(
                                    SITE_DIR . 'include/address.php',
                                    [],
                                    ['MODE' => 'text', 'NAME' => 'Адрес']
                                );
                                ?>
                            </div>
                        </div>
                        <div class="contacts-wrap mail">
                            <div class="title">Почта</div>
                            <div class="contact">
                                <?php
                                $APPLICATION->IncludeFile(
                                    SITE_DIR . 'include/email.php',
                                    [],
                                    ['MODE' => 'text', 'NAME' => 'Email']
                                );
                                ?>
                            </div>
                        </div>
                        <div class="contacts-wrap phone">
                            <div class="title">Телефон</div>
                            <div class="contact">
                                <?php
                                $APPLICATION->IncludeFile(
                                    SITE_DIR . 'include/phone.php',
                                    [],
                                    ['MODE' => 'text', 'NAME' => 'Телефон']
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 no-padding call-column">
                    <a href="#" class="call upper js-open-callback">заказать звонок</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 no-padding">
                    <a href="<?= SITE_DIR ?>" class="logo">
                        <?php
                        $APPLICATION->IncludeFile(
                            SITE_DIR . 'include/logo.php',
                            [],
                            ['MODE' => 'text', 'NAME' => 'Логотип']
                        );
                        ?>
                    </a>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 no-padding">
                    <menu>
                        <?php
                        $APPLICATION->IncludeComponent(
                            'bitrix:menu',
                            'top',
                            [
                                'ROOT_MENU_TYPE' => 'top',
                                'MAX_LEVEL' => '1',
                                'CHILD_MENU_TYPE' => 'top',
                                'USE_EXT' => 'N',
                                'MENU_CACHE_TYPE' => 'N',
                                'MENU_CACHE_TIME' => '3600',
                                'MENU_CACHE_USE_GROUPS' => 'Y',
                                'MENU_CACHE_GET_VARS' => [],
                                'ALLOW_MULTI_SELECT' => 'N',
                            ]
                        );
                        ?>
                    </menu>
                </div>
            </div>
        </div>
    </header>

    <?php if ($isHomePage): ?>
        <div class="slider">
            <div>
                <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/slide-1.png" alt="Слайд 1" />
                <div class="container">
                    <div class="text-wrap upper">
                        <h2>профессиональные строительные леса</h2>
                        <h1 class="black">аренда и продажа</h1>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/slide-2.png" alt="Слайд 2" />
                <div class="container">
                    <div class="text-wrap upper">
                        <h2>строительные леса б/у</h2>
                        <h1>быстро. качественно.</h1>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/slide-3.png" alt="Слайд 3" />
                <div class="container">
                    <div class="text-wrap upper third">
                        <h2>аренда строительных лесов</h2>
                        <h1>аренда вышки туры</h1>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="breadcrumbs">
            <div class="container">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:breadcrumb',
                    'main',
                    [
                        'START_FROM' => '0',
                        'PATH' => '',
                        'SITE_ID' => SITE_ID,
                    ]
                );
                ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="page-content<?= $isHomePage ? '' : ' inner' ?>">
            <aside class="sidebar-left upper">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'services',
                    [
                        'ROOT_MENU_TYPE' => 'left',
                        'MAX_LEVEL' => '1',
                        'CHILD_MENU_TYPE' => 'left',
                        'USE_EXT' => 'Y',
                        'MENU_CACHE_TYPE' => 'N',
                        'MENU_CACHE_TIME' => '3600',
                        'MENU_CACHE_USE_GROUPS' => 'Y',
                        'MENU_CACHE_GET_VARS' => [],
                        'ALLOW_MULTI_SELECT' => 'N',
                    ]
                );
                ?>
            </aside>
            <div class="content-wrapper">

<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$currentPage = $APPLICATION->GetCurPage(false);
$isHomePage = $currentPage === '/';
$isGalleryPage = strpos($currentPage, '/gallery') === 0;
?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="areas-of-use">
        <?php if ($isHomePage): ?>
            <div class="container">
                <h1>Области применения</h1>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 constraction red">
                        <i></i><a href="/services/rent-scaffolding/">Строительство</a>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 rails">
                        <i></i><a href="/services/sale-scaffolding/">Железные дороги</a>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 aviation red">
                        <i></i><a href="/services/scaffolding-used/">Авиация</a>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 industrial">
                        <i></i><a href="/services/rent-scaffolding/">Промышленные объекты</a>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 shipbuilding red">
                        <i></i><a href="/services/tower-rental/">Кораблестроение</a>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 highway">
                        <i></i><a href="/services/sale-scaffolding/">Авто дороги</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <footer>
            <div class="container">
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
                                'footer',
                                [
                                    'ROOT_MENU_TYPE' => 'bottom',
                                    'MAX_LEVEL' => '1',
                                    'CHILD_MENU_TYPE' => 'bottom',
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
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 no-padding call-column">
                                <a href="#" class="call upper js-open-callback">заказать звонок</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<div class="callback-modal" id="callback-modal" aria-hidden="true">
    <div class="callback-modal__backdrop js-close-callback"></div>
    <div class="callback-modal__dialog" role="dialog" aria-modal="true" aria-label="Заказать звонок">
        <button type="button" class="callback-modal__close js-close-callback" aria-label="Закрыть">&times;</button>
        <div class="callback-modal__content">
            <h2>Заказать звонок</h2>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.feedback',
                'callback',
                [
                    'USE_CAPTCHA' => 'N',
                    'OK_TEXT' => 'Спасибо, заявка отправлена.',
                    'EMAIL_TO' => COption::GetOptionString('main', 'email_from', 'info@example.com'),
                    'REQUIRED_FIELDS' => ['NAME', 'MESSAGE'],
                    'EVENT_MESSAGE_ID' => [],
                ]
            );
            ?>
        </div>
    </div>
</div>

<div class="cookie-notice" id="cookie-notice">
    <div class="cookie-notice__text">
        Этот сайт использует cookie для улучшения работы и персонализации контента.
    </div>
    <button type="button" class="cookie-notice__button js-cookie-accept">Принять</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/layout/js/bootstrap.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/layout/slick/slick.min.js"></script>
<?php if ($isGalleryPage): ?>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<?php endif; ?>
<script src="<?= SITE_TEMPLATE_PATH ?>/layout/js/main.js"></script>
</body>
</html>

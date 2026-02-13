<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Услуги и цены');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'Y');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-1-banner.png');
?>
<h1>Услуги и цены</h1>
<p>
    Выберите подходящее направление: аренда строительных лесов, продажа новых комплектов,
    покупка б/у конструкций или аренда вышки-туры для точечных работ.
</p>
<div class="images-wrapper row">
    <a href="/services/rent-scaffolding/"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" alt="Аренда лесов" /></a>
    <a href="/services/sale-scaffolding/"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" alt="Продажа лесов" /></a>
    <a href="/services/scaffolding-used/"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" alt="Леса б/у" /></a>
</div>
<p>
    Все направления доступны с доставкой, технической консультацией и подбором комплекта под ваш объект.
    Для индивидуального расчета воспользуйтесь формой «Заказать звонок» в шапке сайта.
</p>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

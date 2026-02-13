<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Аренда вышки туры');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'Y');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-2-banner.png');
?>
<h1>Аренда вышки туры</h1>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-1.png" alt="Вышка тура 1" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" alt="Вышка тура 2" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" alt="Вышка тура 3" /></a>
</div>
<p>
    Аренда вышки-туры подходит для отделочных, монтажных и сервисных работ на небольшой высоте.
    Оборудование быстро собирается и легко перемещается между рабочими зонами.
</p>
<p>
    Подбираем модель по высоте и нагрузке, предоставляем консультацию по безопасной эксплуатации.
</p>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" alt="Вышка тура 4" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-5.png" alt="Вышка тура 5" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-4.png" alt="Вышка тура 6" /></a>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

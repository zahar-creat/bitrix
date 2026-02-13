<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Леса строительные б/у');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'Y');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-1-banner.png');
?>
<h1>Леса строительные б/у</h1>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" alt="Леса б/у 1" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" alt="Леса б/у 2" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" alt="Леса б/у 3" /></a>
</div>
<p>
    Предлагаем проверенные комплекты б/у лесов после технической ревизии. Это практичный вариант,
    когда нужно быстро запустить объект и сохранить бюджет.
</p>
<p>
    По запросу формируем индивидуальные наборы элементов и организуем доставку в удобные сроки.
</p>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-4.png" alt="Леса б/у 4" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" alt="Леса б/у 5" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-4.png" alt="Леса б/у 6" /></a>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

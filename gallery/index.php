<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Фотогалерея');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'N');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-2-banner.png');
?>
<h1>Фотогалерея</h1>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" alt="Галерея 1" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" alt="Галерея 2" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" alt="Галерея 3" /></a>
</div>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-1.png" alt="Галерея 4" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" alt="Галерея 5" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" alt="Галерея 6" /></a>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

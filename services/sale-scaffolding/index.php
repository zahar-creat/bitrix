<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Продажа строительных лесов');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'Y');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-2-banner.png');
?>
<h1>Продажа строительных лесов</h1>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-1.png" alt="Продажа лесов 1" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" alt="Продажа лесов 2" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" alt="Продажа лесов 3" /></a>
</div>
<p>
    Поставляем новые строительные леса с полным комплектом документов и паспортами качества.
    Доступны рамные, хомутовые и клиновые системы под разные типы фасадных и монолитных работ.
</p>
<p>
    Помогаем сформировать оптимальную комплектацию по проекту, чтобы снизить бюджет без потери
    надежности и удобства монтажа.
</p>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-4.png" alt="Продажа лесов 4" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-5.png" alt="Продажа лесов 5" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-6.png" alt="Продажа лесов 6" /></a>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

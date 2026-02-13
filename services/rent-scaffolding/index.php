<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Аренда строительных лесов');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'Y');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-1-banner.png');
?>
<h1>Аренда строительных лесов</h1>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" alt="Аренда лесов 1" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" alt="Аренда лесов 2" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" alt="Аренда лесов 3" /></a>
</div>
<p>
    Предоставляем строительные леса в аренду на срок от 1 дня до нескольких месяцев.
    Подбираем комплект под высоту объекта, организуем доставку и монтаж.
</p>
<p>
    Перед отгрузкой все элементы проходят проверку геометрии и прочности. Это гарантирует
    безопасную эксплуатацию и экономит время на площадке.
</p>
<div class="images-wrapper row">
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-4.png" alt="Аренда лесов 4" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-5.png" alt="Аренда лесов 5" /></a>
    <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-6.png" alt="Аренда лесов 6" /></a>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

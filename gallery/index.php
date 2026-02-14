<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Фотогалерея');
$APPLICATION->SetPageProperty('SHOW_SIDEBAR', 'N');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-2-banner.png');
?>
<section class="gallery-page">
    <h1>Фотогалерея</h1>
    <div class="gallery-grid">
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" data-fancybox="site-gallery" data-caption="Монтаж строительных лесов">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-1.png" alt="Монтаж строительных лесов" />
        </a>
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" data-fancybox="site-gallery" data-caption="Объект в процессе работ">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-2.png" alt="Объект в процессе работ" />
        </a>
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" data-fancybox="site-gallery" data-caption="Подготовка фасадных лесов">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-1-img-3.png" alt="Подготовка фасадных лесов" />
        </a>
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-1.png" data-fancybox="site-gallery" data-caption="Аренда для промышленного объекта">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-1.png" alt="Аренда для промышленного объекта" />
        </a>
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" data-fancybox="site-gallery" data-caption="Высотные работы">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-2.png" alt="Высотные работы" />
        </a>
        <a class="gallery-card" href="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" data-fancybox="site-gallery" data-caption="Завершенный проект">
            <img src="<?= SITE_TEMPLATE_PATH ?>/layout/img/page-2-img-3.png" alt="Завершенный проект" />
        </a>
    </div>
</section>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

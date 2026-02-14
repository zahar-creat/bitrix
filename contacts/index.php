<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle('Контакты');
$APPLICATION->SetPageProperty('BANNER_IMAGE', SITE_TEMPLATE_PATH . '/layout/img/page-2-banner.png');
?>
<section class="contacts-page">
    <h1>Контакты</h1>
    <p class="contacts-page__lead">
        Свяжитесь с нами удобным способом: по телефону, почте или приезжайте в офис.
        Поможем подобрать решение по аренде и продаже строительных лесов под ваш объект.
    </p>

    <div class="contacts-grid">
        <article class="contacts-card">
            <h2>Телефоны</h2>
            <ul class="contacts-list">
                <li>
                    <span class="contacts-list__label">Основной:</span>
                    <a href="tel:+78007008000">
                        <?php
                        $APPLICATION->IncludeFile(
                            SITE_DIR . 'include/phone.php',
                            [],
                            ['MODE' => 'text', 'NAME' => 'Телефон']
                        );
                        ?>
                    </a>
                </li>
            </ul>
        </article>

        <article class="contacts-card">
            <h2>Электронная почта</h2>
            <ul class="contacts-list">
                <li>
                    <span class="contacts-list__label">Общие вопросы:</span>
                    <a href="mailto:lesa71@mail.ru">
                        <?php
                        $APPLICATION->IncludeFile(
                            SITE_DIR . 'include/email.php',
                            [],
                            ['MODE' => 'text', 'NAME' => 'Email']
                        );
                        ?>
                    </a>
                </li>
            </ul>
        </article>

        <article class="contacts-card">
            <h2>Адрес офиса</h2>
            <p class="contacts-card__address">
                <?php
                $APPLICATION->IncludeFile(
                    SITE_DIR . 'include/address.php',
                    [],
                    ['MODE' => 'text', 'NAME' => 'Адрес']
                );
                ?>
            </p>
            <p class="contacts-card__note">
                Работаем ежедневно. Перед визитом рекомендуем согласовать встречу по телефону.
            </p>
        </article>
    </div>

    <div class="contacts-map">
        <h2>Мы на карте</h2>
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A112bca028855e020a654ff55813b952ce78f33b1f69958bf557b0dc2b54ede13&amp;source=constructor"
            width="100%"
            height="400"
            frameborder="0"
            loading="lazy"
        ></iframe>
    </div>
</section>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

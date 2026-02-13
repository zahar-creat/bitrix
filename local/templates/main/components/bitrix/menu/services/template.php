<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    $arResult = [
        [
            'TEXT' => 'аренда<br>строительных лесов',
            'LINK' => '/services/rent-scaffolding/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
            'PARAMS' => ['HTML' => 'Y'],
        ],
        [
            'TEXT' => 'продажа<br>строительных лесов',
            'LINK' => '/services/sale-scaffolding/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
            'PARAMS' => ['HTML' => 'Y'],
        ],
        [
            'TEXT' => 'леса<br>строительные б/у',
            'LINK' => '/services/scaffolding-used/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
            'PARAMS' => ['HTML' => 'Y'],
        ],
        [
            'TEXT' => 'аренда вышки туры',
            'LINK' => '/services/tower-rental/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
        ],
    ];
}

global $APPLICATION;
$currentPage = is_object($APPLICATION) ? $APPLICATION->GetCurPage(false) : '';
$currentPageNormalized = rtrim(str_replace('/index.php', '/', $currentPage), '/') . '/';
?>
<ul>
<?php foreach ($arResult as $arItem): ?>
    <?php
    $itemLink = !empty($arItem['LINK']) ? $arItem['LINK'] : '#';
    $itemLinkNormalized = rtrim(str_replace('/index.php', '/', $itemLink), '/') . '/';
    $isSelected = !empty($arItem['SELECTED']) || ($itemLink !== '#' && $itemLinkNormalized === $currentPageNormalized);
    $className = $isSelected ? ' class="active"' : '';
    ?>
    <li<?= $className ?>>
        <?php if ($arItem['PERMISSION'] > 'D'): ?>
            <a href="<?= htmlspecialcharsbx($itemLink) ?>">
                <?php
                if (!empty($arItem['PARAMS']['HTML'])) {
                    echo strip_tags($arItem['TEXT'], '<br>');
                } else {
                    echo htmlspecialcharsbx($arItem['TEXT']);
                }
                ?>
            </a>
        <?php else: ?>
            <a href="#">
                <?php
                if (!empty($arItem['PARAMS']['HTML'])) {
                    echo strip_tags($arItem['TEXT'], '<br>');
                } else {
                    echo htmlspecialcharsbx($arItem['TEXT']);
                }
                ?>
            </a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

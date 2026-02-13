<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    $arResult = [
        [
            'TEXT' => 'Аренда строительных лесов',
            'LINK' => '/services/rent-scaffolding/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
        ],
        [
            'TEXT' => 'Продажа строительных лесов',
            'LINK' => '/services/sale-scaffolding/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
        ],
        [
            'TEXT' => 'Леса строительные б/у',
            'LINK' => '/services/scaffolding-used/',
            'SELECTED' => false,
            'PERMISSION' => 'R',
        ],
        [
            'TEXT' => 'Аренда вышки туры',
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
<ul class="upper">
<?php foreach ($arResult as $arItem): ?>
    <?php
    $itemLink = !empty($arItem['LINK']) ? $arItem['LINK'] : '#';
    $itemLinkNormalized = rtrim(str_replace('/index.php', '/', $itemLink), '/') . '/';
    $isSelected = !empty($arItem['SELECTED']) || ($itemLink !== '#' && $itemLinkNormalized === $currentPageNormalized);
    $className = $isSelected ? ' class="active"' : '';
    ?>
    <li<?= $className ?>>
        <?php if ($arItem['PERMISSION'] > 'D'): ?>
            <a href="<?= htmlspecialcharsbx($itemLink) ?>"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php else: ?>
            <a href="#"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}

global $APPLICATION;
$currentPage = is_object($APPLICATION) ? $APPLICATION->GetCurPage(false) : '';
$currentPageNormalized = rtrim(str_replace('/index.php', '/', $currentPage), '/') . '/';
?>
<ul>
<?php foreach ($arResult as $arItem): ?>
    <?php
    $submenu = isset($arItem['PARAMS']['SUBMENU']) && is_array($arItem['PARAMS']['SUBMENU'])
        ? $arItem['PARAMS']['SUBMENU']
        : [];
    $itemClass = $arItem['SELECTED'] ? 'active' : '';
    if (!empty($submenu)) {
        $itemClass = trim($itemClass . ' has-children');
    }
    $className = $itemClass !== '' ? ' class="' . $itemClass . '"' : '';
    ?>
    <li<?= $className ?>>
        <?php if ($arItem['PERMISSION'] > 'D'): ?>
            <a href="<?= htmlspecialcharsbx($arItem['LINK']) ?>"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php else: ?>
            <a href="#"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php endif; ?>

        <?php if (!empty($submenu)): ?>
            <ul class="submenu">
                <?php foreach ($submenu as $submenuItem): ?>
                    <?php
                    $submenuLink = isset($submenuItem['LINK']) ? $submenuItem['LINK'] : '#';
                    $submenuText = isset($submenuItem['TEXT']) ? $submenuItem['TEXT'] : '';
                    $submenuLinkNormalized = rtrim(str_replace('/index.php', '/', $submenuLink), '/') . '/';
                    $submenuClass = ($submenuLink !== '#' && $currentPageNormalized === $submenuLinkNormalized) ? ' class="active"' : '';
                    ?>
                    <li<?= $submenuClass ?>>
                        <a href="<?= htmlspecialcharsbx($submenuLink) ?>"><?= htmlspecialcharsbx($submenuText) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

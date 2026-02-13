<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>
<ul>
<?php $itemsCount = count($arResult); ?>
<?php foreach ($arResult as $index => $arItem): ?>
    <?php $isLast = ($index === $itemsCount - 1); ?>
    <li>
        <?php if (!$isLast): ?>
            <a href="<?= htmlspecialcharsbx($arItem['LINK']) ?>"><?= htmlspecialcharsbx($arItem['TITLE']) ?></a>
        <?php else: ?>
            <?= htmlspecialcharsbx($arItem['TITLE']) ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

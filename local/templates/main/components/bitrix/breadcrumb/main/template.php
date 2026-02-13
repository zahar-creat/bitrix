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
<?php $position = 0; ?>
<?php foreach ($arResult as $arItem): ?>
    <?php
    $position++;
    $isLast = ($position === $itemsCount);
    ?>
    <li>
        <?php if (!$isLast): ?>
            <a href="<?= htmlspecialcharsbx($arItem['LINK']) ?>"><?= htmlspecialcharsbx($arItem['TITLE']) ?></a>
        <?php else: ?>
            <?= htmlspecialcharsbx($arItem['TITLE']) ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

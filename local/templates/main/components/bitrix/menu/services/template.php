<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return;
}
?>
<ul>
<?php foreach ($arResult as $arItem): ?>
    <?php $className = $arItem['SELECTED'] ? ' class="active"' : ''; ?>
    <li<?= $className ?>>
        <?php if ($arItem['PERMISSION'] > 'D'): ?>
            <a href="<?= htmlspecialcharsbx($arItem['LINK']) ?>"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php else: ?>
            <a href="#"><?= htmlspecialcharsbx($arItem['TEXT']) ?></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

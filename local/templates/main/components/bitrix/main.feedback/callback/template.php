<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$authorName = isset($arResult['AUTHOR_NAME']) ? $arResult['AUTHOR_NAME'] : '';
$messageText = isset($arResult['MESSAGE']) ? $arResult['MESSAGE'] : '';
?>
<?php if (!empty($arResult['ERROR_MESSAGE'])): ?>
    <div class="callback-form__message">
        <?php foreach ($arResult['ERROR_MESSAGE'] as $error): ?>
            <?php ShowError($error); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (!empty($arResult['OK_MESSAGE'])): ?>
    <div class="callback-form__message">
        <?php ShowNote($arResult['OK_MESSAGE']); ?>
    </div>
<?php endif; ?>

<form action="<?= POST_FORM_ACTION_URI ?>" method="post" class="callback-form">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="PARAMS_HASH" value="<?= htmlspecialcharsbx($arResult['PARAMS_HASH']) ?>">

    <div class="callback-form__field">
        <label for="callback-name">Имя <span class="callback-form__required">*</span></label>
        <input
            type="text"
            id="callback-name"
            name="user_name"
            value="<?= htmlspecialcharsbx($authorName) ?>"
            required
        >
    </div>

    <div class="callback-form__field">
        <label for="callback-phone">Телефон <span class="callback-form__required">*</span></label>
        <input
            type="text"
            id="callback-phone"
            name="MESSAGE"
            value="<?= htmlspecialcharsbx($messageText) ?>"
            required
        >
    </div>

    <button type="submit" name="submit" class="callback-form__submit">Отправить</button>
</form>

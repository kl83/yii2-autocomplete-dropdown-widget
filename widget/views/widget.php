<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $widget kl83\widgets\AutocompleteDropdown */
/* @var $hasModel boolean */

?>
<?= Html::beginTag('div', $widget->options) ?>
    <?php if ( $hasModel ) : ?>
        <?= Html::activeHiddenInput($widget->model, $widget->attribute) ?>
    <?php else : ?>
        <?= Html::hiddenInput($widget->name, $widget->value) ?>
    <?php endif; ?>
    <?= Html::textInput('', $widget->textValue, [
        'class' => 'autocomplete form-control',
    ]) ?>
<?= Html::endTag('div'); ?>
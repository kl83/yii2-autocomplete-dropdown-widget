<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\base\DynamicModel;
use kl83\widgets\AutocompleteDropdown;

?>

<h3>Plain</h3>
<?= AutocompleteDropdown::widget([
    'name' => 'test',
    'source' => Url::to(['site/source']),
]) ?>

<h3>Form</h3>
<?php
    $model = new DynamicModel([
        'id' => null,
    ]);
    $model->addRule('id', 'required');
    $model->addRule('id', 'integer');
    $model->load(Yii::$app->request->get());
    $form = ActiveForm::begin([ 'method' => 'get', 'action' => '/' ]);
    echo $form->field($model, 'id')->label(false)->widget('kl83\widgets\AutocompleteDropdown', [
        'source' => Url::to(['site/source']),
        'textValue' => $model->id !== null ? Yii::$app->controller->sampleData[$model->id] : '',
    ]);
    echo Html::submitButton();
    ActiveForm::end();

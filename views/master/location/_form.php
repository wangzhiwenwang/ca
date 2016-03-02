<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\master\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'county_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'county_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'village_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'village_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

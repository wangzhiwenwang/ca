<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\master\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'province_id') ?>

    <?= $form->field($model, 'province_name') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'city_name') ?>

    <?php // echo $form->field($model, 'county_id') ?>

    <?php // echo $form->field($model, 'county_name') ?>

    <?php // echo $form->field($model, 'town_id') ?>

    <?php // echo $form->field($model, 'town_name') ?>

    <?php // echo $form->field($model, 'village_id') ?>

    <?php // echo $form->field($model, 'village_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

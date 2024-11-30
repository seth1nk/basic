<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KnigiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Название') ?>

    <?= $form->field($model, 'Издательство') ?>

    <?= $form->field($model, 'Автор') ?>

    <?= $form->field($model, 'Год') ?>

    <?php // echo $form->field($model, 'Жанр') ?>

    <?php // echo $form->field($model, 'Цена') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

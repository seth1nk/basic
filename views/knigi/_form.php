<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Издательство')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Автор')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Год')->textInput() ?>

    <?= $form->field($model, 'Жанр')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Цена')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

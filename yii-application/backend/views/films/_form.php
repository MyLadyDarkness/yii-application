<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Films */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Film_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Film_Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Film_Id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Film_Author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

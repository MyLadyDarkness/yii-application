<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Film_Name') ?>

    <?= $form->field($model, 'Film_Year') ?>

    <?= $form->field($model, 'Film_Id') ?>

    <?= $form->field($model, 'Film_Author') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

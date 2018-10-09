<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Authors */

$this->title = 'Update Authors: ' . $model->Authors_Id;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Authors_Id, 'url' => ['view', 'id' => $model->Authors_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="authors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

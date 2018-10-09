<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Genres */

$this->title = 'Update Genres: ' . $model->Genre_id;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Genre_id, 'url' => ['view', 'id' => $model->Genre_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

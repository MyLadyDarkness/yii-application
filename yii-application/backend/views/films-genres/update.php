<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmsGenres */

$this->title = 'Update Films Genres: ' . $model->Film_Id;
$this->params['breadcrumbs'][] = ['label' => 'Films Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Film_Id, 'url' => ['view', 'Film_Id' => $model->Film_Id, 'Genre_Id' => $model->Genre_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="films-genres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmsGenres */

$this->title = $model->Film_Id;
$this->params['breadcrumbs'][] = ['label' => 'Films Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-genres-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Film_Id' => $model->Film_Id, 'Genre_Id' => $model->Genre_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Film_Id' => $model->Film_Id, 'Genre_Id' => $model->Genre_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Film_Id',
            'Genre_Id',
        ],
    ]) ?>

</div>

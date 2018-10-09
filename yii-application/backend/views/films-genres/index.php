<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FilmsGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Films Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Film_Id',
            'Genre_Id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

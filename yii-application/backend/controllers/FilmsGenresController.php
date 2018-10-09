<?php

namespace backend\controllers;

use Yii;
use backend\models\FilmsGenres;
use backend\models\FilmsGenresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FilmsGenresController implements the CRUD actions for FilmsGenres model.
 */
class FilmsGenresController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FilmsGenres models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilmsGenresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FilmsGenres model.
     * @param string $Film_Id
     * @param string $Genre_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Film_Id, $Genre_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Film_Id, $Genre_Id),
        ]);
    }

    /**
     * Creates a new FilmsGenres model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FilmsGenres();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Film_Id' => $model->Film_Id, 'Genre_Id' => $model->Genre_Id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FilmsGenres model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Film_Id
     * @param string $Genre_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Film_Id, $Genre_Id)
    {
        $model = $this->findModel($Film_Id, $Genre_Id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Film_Id' => $model->Film_Id, 'Genre_Id' => $model->Genre_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FilmsGenres model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Film_Id
     * @param string $Genre_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Film_Id, $Genre_Id)
    {
        $this->findModel($Film_Id, $Genre_Id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FilmsGenres model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Film_Id
     * @param string $Genre_Id
     * @return FilmsGenres the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Film_Id, $Genre_Id)
    {
        if (($model = FilmsGenres::findOne(['Film_Id' => $Film_Id, 'Genre_Id' => $Genre_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

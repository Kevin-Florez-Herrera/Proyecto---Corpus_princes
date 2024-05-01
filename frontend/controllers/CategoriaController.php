<?php

namespace frontend\controllers;

use frontend\models\Categoria;
use frontend\models\Search\CategoriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriaController implements the CRUD actions for Categoria model.
 */
class CategoriaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Categoria models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CategoriaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Categoria model.
     * @param int $IDCategoria_Procedimiento Id Categoria Procedimiento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IDCategoria_Procedimiento)
    {
        return $this->render('view', [
            'model' => $this->findModel($IDCategoria_Procedimiento),
        ]);
    }

    /**
     * Creates a new Categoria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Categoria();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IDCategoria_Procedimiento' => $model->IDCategoria_Procedimiento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Categoria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $IDCategoria_Procedimiento Id Categoria Procedimiento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IDCategoria_Procedimiento)
    {
        $model = $this->findModel($IDCategoria_Procedimiento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDCategoria_Procedimiento' => $model->IDCategoria_Procedimiento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Categoria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $IDCategoria_Procedimiento Id Categoria Procedimiento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IDCategoria_Procedimiento)
    {
        $this->findModel($IDCategoria_Procedimiento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Categoria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $IDCategoria_Procedimiento Id Categoria Procedimiento
     * @return Categoria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDCategoria_Procedimiento)
    {
        if (($model = Categoria::findOne(['IDCategoria_Procedimiento' => $IDCategoria_Procedimiento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

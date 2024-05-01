<?php

namespace frontend\controllers;

use frontend\models\Procedimientos;
use frontend\models\Search\ProcedimientosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProcedimientosController implements the CRUD actions for Procedimientos model.
 */
class ProcedimientosController extends Controller
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
     * Lists all Procedimientos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProcedimientosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Procedimientos model.
     * @param int $ID_Procedimiento Id Procedimiento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Procedimiento)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Procedimiento),
        ]);
    }

    /**
     * Creates a new Procedimientos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Procedimientos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Procedimiento' => $model->ID_Procedimiento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Procedimientos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Procedimiento Id Procedimiento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Procedimiento)
    {
        $model = $this->findModel($ID_Procedimiento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Procedimiento' => $model->ID_Procedimiento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Procedimientos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Procedimiento Id Procedimiento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Procedimiento)
    {
        $this->findModel($ID_Procedimiento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Procedimientos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Procedimiento Id Procedimiento
     * @return Procedimientos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Procedimiento)
    {
        if (($model = Procedimientos::findOne(['ID_Procedimiento' => $ID_Procedimiento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

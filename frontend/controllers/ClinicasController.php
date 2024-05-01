<?php

namespace frontend\controllers;

use frontend\models\Clinicas;
use frontend\models\Search\ClinicasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClinicasController implements the CRUD actions for Clinicas model.
 */
class ClinicasController extends Controller
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
     * Lists all Clinicas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ClinicasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Clinicas model.
     * @param int $ID_Clinica Id Clinica
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Clinica)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Clinica),
        ]);
    }

    /**
     * Creates a new Clinicas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Clinicas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Clinica' => $model->ID_Clinica]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Clinicas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Clinica Id Clinica
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Clinica)
    {
        $model = $this->findModel($ID_Clinica);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Clinica' => $model->ID_Clinica]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Clinicas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Clinica Id Clinica
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Clinica)
    {
        $this->findModel($ID_Clinica)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Clinicas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Clinica Id Clinica
     * @return Clinicas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Clinica)
    {
        if (($model = Clinicas::findOne(['ID_Clinica' => $ID_Clinica])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

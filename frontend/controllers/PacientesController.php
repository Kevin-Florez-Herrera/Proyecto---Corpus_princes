<?php

namespace frontend\controllers;

use frontend\models\Pacientes;
use frontend\models\Search\PacientesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PacientesController implements the CRUD actions for Pacientes model.
 */
class PacientesController extends Controller
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
     * Lists all Pacientes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PacientesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pacientes model.
     * @param int $ID_Paciente Id Paciente
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Paciente)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Paciente),
        ]);
    }

    /**
     * Creates a new Pacientes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pacientes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Paciente' => $model->ID_Paciente]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pacientes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Paciente Id Paciente
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Paciente)
    {
        $model = $this->findModel($ID_Paciente);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Paciente' => $model->ID_Paciente]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pacientes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Paciente Id Paciente
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Paciente)
    {
        $this->findModel($ID_Paciente)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pacientes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Paciente Id Paciente
     * @return Pacientes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Paciente)
    {
        if (($model = Pacientes::findOne(['ID_Paciente' => $ID_Paciente])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

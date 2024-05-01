<?php

namespace frontend\controllers;

use frontend\models\Infocirugia;
use frontend\models\Search\InfocirugiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InfocirugiaController implements the CRUD actions for Infocirugia model.
 */
class InfocirugiaController extends Controller
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
     * Lists all Infocirugia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InfocirugiaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Infocirugia model.
     * @param int $ID_Cirugia Id Cirugia
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Cirugia)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Cirugia),
        ]);
    }

    /**
     * Creates a new Infocirugia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Infocirugia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Cirugia' => $model->ID_Cirugia]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Infocirugia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Cirugia Id Cirugia
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Cirugia)
    {
        $model = $this->findModel($ID_Cirugia);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Cirugia' => $model->ID_Cirugia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Infocirugia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Cirugia Id Cirugia
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Cirugia)
    {
        $this->findModel($ID_Cirugia)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Infocirugia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Cirugia Id Cirugia
     * @return Infocirugia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Cirugia)
    {
        if (($model = Infocirugia::findOne(['ID_Cirugia' => $ID_Cirugia])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

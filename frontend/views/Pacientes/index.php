<?php

use frontend\models\Pacientes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Search\PacientesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacientes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pacientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Paciente',
            'Documento',
            'Nombre',
            'Apellido',
            'Fecha_Nacimiento',
            //'Celular',
            //'Departamento',
            //'Ciudad',
            //'Direccion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pacientes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Paciente' => $model->ID_Paciente]);
                 }
            ],
        ],
    ]); ?>


</div>

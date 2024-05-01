<?php

use frontend\models\Colaborador;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ColaboradorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colaboradors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colaborador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Colaborador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Colaborador',
            'Nombre',
            'Apellido',
            'Fecha_Nacimiento',
            'Celular',
            //'Departamento',
            //'Ciudad',
            //'Direccion',
            //'Correo',
            //'Rol',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Colaborador $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Colaborador' => $model->ID_Colaborador]);
                 }
            ],
        ],
    ]); ?>


</div>

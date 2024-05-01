<?php

use frontend\models\Infocirugia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Search\InfocirugiaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Infocirugias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infocirugia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Infocirugia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Cirugia',
            'Fecha_inicio',
            'Fecha_fin',
            'ID_Clinica',
            'ID_Paciente',
            //'ID_Colaborador',
            //'ID_Procedimiento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Infocirugia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Cirugia' => $model->ID_Cirugia]);
                 }
            ],
        ],
    ]); ?>


</div>

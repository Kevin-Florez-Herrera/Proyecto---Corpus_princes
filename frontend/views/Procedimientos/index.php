<?php

use frontend\models\Procedimientos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ProcedimientosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Procedimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Procedimientos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Procedimiento',
            'Nombre_Procedimiento',
            'Descripcion:ntext',
            'IDCategoria_Procedimiento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Procedimientos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Procedimiento' => $model->ID_Procedimiento]);
                 }
            ],
        ],
    ]); ?>


</div>

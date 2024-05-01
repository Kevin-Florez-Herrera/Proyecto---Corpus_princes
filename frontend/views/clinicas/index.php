<?php

use frontend\models\Clinicas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ClinicasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clinicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinicas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clinicas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Clinica',
            'Nombre_Clinica',
            'Direccion',
            'Barrio',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clinicas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Clinica' => $model->ID_Clinica]);
                 }
            ],
        ],
    ]); ?>


</div>

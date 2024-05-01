<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Clinicas $model */

$this->title = $model->ID_Clinica;
$this->params['breadcrumbs'][] = ['label' => 'Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clinicas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_Clinica' => $model->ID_Clinica], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_Clinica' => $model->ID_Clinica], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_Clinica',
            'Nombre_Clinica',
            'Direccion',
            'Barrio',
        ],
    ]) ?>

</div>

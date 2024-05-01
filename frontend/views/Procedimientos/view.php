<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Procedimientos $model */

$this->title = $model->ID_Procedimiento;
$this->params['breadcrumbs'][] = ['label' => 'Procedimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="procedimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_Procedimiento' => $model->ID_Procedimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_Procedimiento' => $model->ID_Procedimiento], [
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
            'ID_Procedimiento',
            'Nombre_Procedimiento',
            'Descripcion:ntext',
            'IDCategoria_Procedimiento',
        ],
    ]) ?>

</div>

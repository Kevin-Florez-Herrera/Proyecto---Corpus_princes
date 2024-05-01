<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Infocirugia $model */

$this->title = $model->ID_Cirugia;
$this->params['breadcrumbs'][] = ['label' => 'Infocirugias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="infocirugia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_Cirugia' => $model->ID_Cirugia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_Cirugia' => $model->ID_Cirugia], [
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
            'ID_Cirugia',
            'Fecha_inicio',
            'Fecha_fin',
            'ID_Clinica',
            'ID_Paciente',
            'ID_Colaborador',
            'ID_Procedimiento',
        ],
    ]) ?>

</div>

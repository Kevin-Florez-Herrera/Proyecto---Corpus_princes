<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Colaborador $model */

$this->title = $model->ID_Colaborador;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="colaborador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_Colaborador' => $model->ID_Colaborador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_Colaborador' => $model->ID_Colaborador], [
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
            'ID_Colaborador',
            'Nombre',
            'Apellido',
            'Fecha_Nacimiento',
            'Celular',
            'Departamento',
            'Ciudad',
            'Direccion',
            'Correo',
            'Rol',
        ],
    ]) ?>

</div>

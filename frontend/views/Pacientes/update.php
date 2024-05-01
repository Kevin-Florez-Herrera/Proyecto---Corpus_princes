<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Pacientes $model */

$this->title = 'Update Pacientes: ' . $model->ID_Paciente;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Paciente, 'url' => ['view', 'ID_Paciente' => $model->ID_Paciente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pacientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

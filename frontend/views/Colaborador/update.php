<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Colaborador $model */

$this->title = 'Update Colaborador: ' . $model->ID_Colaborador;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Colaborador, 'url' => ['view', 'ID_Colaborador' => $model->ID_Colaborador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="colaborador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Procedimientos $model */

$this->title = 'Update Procedimientos: ' . $model->ID_Procedimiento;
$this->params['breadcrumbs'][] = ['label' => 'Procedimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Procedimiento, 'url' => ['view', 'ID_Procedimiento' => $model->ID_Procedimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="procedimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Employees $model */

$this->title = 'Update Employees: ' . $model->employeeNumber;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employeeNumber, 'url' => ['view', 'employeeNumber' => $model->employeeNumber]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

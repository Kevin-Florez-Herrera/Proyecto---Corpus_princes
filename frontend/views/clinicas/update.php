<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Clinicas $model */

$this->title = 'Update Clinicas: ' . $model->ID_Clinica;
$this->params['breadcrumbs'][] = ['label' => 'Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Clinica, 'url' => ['view', 'ID_Clinica' => $model->ID_Clinica]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clinicas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

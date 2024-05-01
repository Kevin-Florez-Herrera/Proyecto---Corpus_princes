<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Search\PacientesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pacientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Paciente') ?>

    <?= $form->field($model, 'Documento') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?= $form->field($model, 'Fecha_Nacimiento') ?>

    <?php // echo $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'Departamento') ?>

    <?php // echo $form->field($model, 'Ciudad') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

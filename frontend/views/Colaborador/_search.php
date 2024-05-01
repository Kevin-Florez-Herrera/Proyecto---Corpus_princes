<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ColaboradorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colaborador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Colaborador') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?= $form->field($model, 'Fecha_Nacimiento') ?>

    <?= $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'Departamento') ?>

    <?php // echo $form->field($model, 'Ciudad') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Correo') ?>

    <?php // echo $form->field($model, 'Rol') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Search\InfocirugiaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="infocirugia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Cirugia') ?>

    <?= $form->field($model, 'Fecha_inicio') ?>

    <?= $form->field($model, 'Fecha_fin') ?>

    <?= $form->field($model, 'ID_Clinica') ?>

    <?= $form->field($model, 'ID_Paciente') ?>

    <?php // echo $form->field($model, 'ID_Colaborador') ?>

    <?php // echo $form->field($model, 'ID_Procedimiento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

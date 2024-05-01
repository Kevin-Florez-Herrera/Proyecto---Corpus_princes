<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ClinicasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clinicas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Clinica') ?>

    <?= $form->field($model, 'Nombre_Clinica') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Barrio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

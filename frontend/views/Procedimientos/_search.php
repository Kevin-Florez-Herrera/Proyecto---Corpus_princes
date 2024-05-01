<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Search\ProcedimientosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="procedimientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Procedimiento') ?>

    <?= $form->field($model, 'Nombre_Procedimiento') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'IDCategoria_Procedimiento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

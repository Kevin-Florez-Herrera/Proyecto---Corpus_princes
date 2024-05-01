<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Clinicas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clinicas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_Clinica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Barrio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

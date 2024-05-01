<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Colaborador $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colaborador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fecha_Nacimiento')->textInput() ?>

    <?= $form->field($model, 'Celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Departamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rol')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Procedimientos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="procedimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_Procedimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IDCategoria_Procedimiento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

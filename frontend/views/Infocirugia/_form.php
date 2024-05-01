<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Infocirugia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="infocirugia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'Fecha_fin')->textInput() ?>

    <?= $form->field($model, 'ID_Clinica')->textInput() ?>

    <?= $form->field($model, 'ID_Paciente')->textInput() ?>

    <?= $form->field($model, 'ID_Colaborador')->textInput() ?>

    <?= $form->field($model, 'ID_Procedimiento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

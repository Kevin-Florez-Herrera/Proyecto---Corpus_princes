<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Categoria $model */

$this->title = 'Update Categoria: ' . $model->IDCategoria_Procedimiento;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDCategoria_Procedimiento, 'url' => ['view', 'IDCategoria_Procedimiento' => $model->IDCategoria_Procedimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Infocirugia $model */

$this->title = 'Update Infocirugia: ' . $model->ID_Cirugia;
$this->params['breadcrumbs'][] = ['label' => 'Infocirugias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Cirugia, 'url' => ['view', 'ID_Cirugia' => $model->ID_Cirugia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="infocirugia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

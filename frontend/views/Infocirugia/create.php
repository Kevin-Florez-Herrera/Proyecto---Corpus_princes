<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Infocirugia $model */

$this->title = 'Create Infocirugia';
$this->params['breadcrumbs'][] = ['label' => 'Infocirugias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infocirugia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

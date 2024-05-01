<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Categoria $model */

$this->title = $model->IDCategoria_Procedimiento;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IDCategoria_Procedimiento' => $model->IDCategoria_Procedimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IDCategoria_Procedimiento' => $model->IDCategoria_Procedimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDCategoria_Procedimiento',
            'Categoria_Procedimiento',
            'Descripcion:ntext',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Permohonan */

$this->title = $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
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
            'nama:ntext',
            'nim',
            'jenis:ntext',
            'tanggal masuk',
        ],
    ]) ?>

</div>

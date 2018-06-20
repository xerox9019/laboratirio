<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GruposMiembrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grupos Miembros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupos-miembros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Grupos Miembros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nu_alumno',
            'nu_grupo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

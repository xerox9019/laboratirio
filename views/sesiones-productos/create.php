<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SesionesProductos */

$this->title = 'Create Sesiones Productos';
$this->params['breadcrumbs'][] = ['label' => 'Sesiones Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sesiones-productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

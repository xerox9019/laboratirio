<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GruposMiembros */

$this->title = 'Create Grupos Miembros';
$this->params['breadcrumbs'][] = ['label' => 'Grupos Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupos-miembros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SesionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesiones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nu_docente') ?>

    <?= $form->field($model, 'nu_materia') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?= $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

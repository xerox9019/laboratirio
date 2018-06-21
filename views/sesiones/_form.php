<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sesiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesiones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nu_docente')->textInput() ?>

    <?= $form->field($model, 'nu_materia')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'duracion')->dropDownList([1 => '1', 2 =>  '2']) ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

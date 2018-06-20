<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GruposMiembros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-miembros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nu_alumno')->textInput() ?>

    <?= $form->field($model, 'nu_grupo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

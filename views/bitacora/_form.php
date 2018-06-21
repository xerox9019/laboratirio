<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bitacora */
/* @var $form yii\widgets\ActiveForm */
?>
  
<div class="bitacora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nu_sesion')->textInput() ?>

    <?= $form->field($model, 'nu_alumno')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

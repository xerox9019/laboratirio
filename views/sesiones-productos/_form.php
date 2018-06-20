<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SesionesProductos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesiones-productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nu_sesion')->textInput() ?>

    <?= $form->field($model, 'nu_producto')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

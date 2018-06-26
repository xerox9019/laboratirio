<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Productos;

/* @var $this yii\web\View */
/* @var $model app\models\SesionesProductos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesiones-productos-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'nu_sesion')->dropDownList([1 => '1', 2 =>  '2']) ?>

 <?= $form->field($model, 'nu_producto')->dropDownList (
 ArrayHelper::map(Productos::find()->all (), 'id','nombre'),
[
'prompt' =>'Seleccionar Producto',
] );?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

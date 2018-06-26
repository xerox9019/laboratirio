<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use app\models\Usuarios;

/* @var $this yii\web\View */
/* @var $model app\models\Bitacora */
/* @var $form yii\widgets\ActiveForm */
?>
  
<div class="bitacora-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'nu_sesion')->dropDownList([1 => '1', 2 =>  '2']) ?>

 <?= $form->field($model, 'nu_alumno')->dropDownList (
 ArrayHelper::map(Usuarios::find()->all (), 'id','username'),
[
'prompt' =>'Seleccionar alumno',
] ); ?>

      <?= $form->field($model, 'fecha')->widget (DatePicker::className(), [
  'inline' =>false,
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
    ]
]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

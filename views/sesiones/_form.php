<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use app\models\Usuarios;
use app\models\Materias;

/* @var $this yii\web\View */
/* @var $model app\models\Sesiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sesiones-form">

    <?php $form = ActiveForm::begin(); ?> 
 
      <?= $form->field($model, 'nu_docente')->dropDownList (
 ArrayHelper::map(Usuarios::find()->all (), 'id','username'),
[
'prompt' =>'Seleccionar materia',
] ); ?>

     <?= $form->field($model, 'nu_materia')->dropDownList (
 ArrayHelper::map(Materias::find()->all (), 'id','nombre'),
[
'prompt' =>'Seleccionar materia',
] ); ?>

    <?= $form->field($model, 'fecha_inicio')->widget (DatePicker::className(), [
  'inline' =>false,
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
    ]
]);?>
    <?= $form->field($model, 'duracion')->dropDownList([1 => '1', 2 =>  '2']) ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

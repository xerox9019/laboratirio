<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Grupos;
use app\models\Usuarios;

/* @var $this yii\web\View */
/* @var $model app\models\GruposMiembros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-miembros-form">

    <?php $form = ActiveForm::begin(); ?>


	<?= $form->field($model, 'nu_alumno')->dropDownList (
 ArrayHelper::map(Usuarios::find()->all (), 'id','username'),
[
'prompt' =>'Seleccionar Alumno',
] );?>


	<?= $form->field($model, 'nu_grupo')->dropDownList (
 ArrayHelper::map(Grupos::find()->all (), 'id','nombre'),
[
'prompt' =>'Seleccionar Grupo',
] );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form
        ->field($model, 'estatus')
        ->dropDownList(
            ['1' => 'Activo', '2' => 'Inactivo'],
            ['prompt' => 'Seleccione una opción'],
        ) 
    ?>

    <br>

    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guarda'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

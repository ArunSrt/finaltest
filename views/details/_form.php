<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Details */
/* @var $form yii\widgets\ActiveForm */
?>
<style>

</style>
<div class="details-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'id')->textInput() ?>-->
<div class="row">
<div  class="col-sm-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
 
    <?= $form->field($model, 'mobile')->textInput() ?>
</div>
<div  class="col-sm-6">
    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>
</div>
   <!-- <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'insdt')->textInput() ?>

    <?= $form->field($model, 'moddt')->textInput() ?>-->
</div>
    <div class="form-group" >
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

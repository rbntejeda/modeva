<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'evaluacion-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'EVA_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'ESP_ID'); ?>
    <?php echo $form->textFieldControlGroup($model,'EVA_NOTA'); ?>
    <?php echo $form->textFieldControlGroup($model,'EVA_FECHA'); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

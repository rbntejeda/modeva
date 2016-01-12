<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'empresa-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'COM_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textAreaControlGroup($model,'EMP_DIRECCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FONO',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_EMAIL',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_DESHABILITADO'); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CREATE'); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_MODIFIED'); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

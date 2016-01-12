<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'EMP_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textAreaControlGroup($model,'EMP_DIRECCION',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FONO',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_EMAIL',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_DESHABILITADO'); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CREATE'); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_MODIFIED'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'USU_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_NOMBRE',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_APELLIDOS',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>100)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

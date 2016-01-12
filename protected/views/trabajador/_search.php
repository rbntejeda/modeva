<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'TRA_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_NOMBRES',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_PATERNO',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_MATERNO',array('maxlength'=>100)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_FECHA_NAC'); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_DIRECCION',array('maxlength'=>300)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_CELULAR',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_LICENCIA',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_EMAIL',array('maxlength'=>300)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_MANEJO_SW',array('maxlength'=>300)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

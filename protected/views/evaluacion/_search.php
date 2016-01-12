<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'EVA_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'TRA_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'MOD_ID',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EVA_NOTA'); ?>
    <?php echo $form->textFieldControlGroup($model,'EVA_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'EVA_INICIO'); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

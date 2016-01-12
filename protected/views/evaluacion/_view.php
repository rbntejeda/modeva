<?php
/* @var $this EvaluacionController */
/* @var $data Evaluacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EVA_ID),array('view','id'=>$data->EVA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOD_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MOD_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVA_NOTA')); ?>:</b>
	<?php echo CHtml::encode($data->EVA_NOTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVA_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->EVA_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVA_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->EVA_INICIO); ?>
	<br />


</div>
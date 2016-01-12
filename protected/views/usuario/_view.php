<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USU_ID),array('view','id'=>$data->USU_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->USU_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->USU_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->USU_APELLIDOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USU_PASSWORD); ?>
	<br />


</div>
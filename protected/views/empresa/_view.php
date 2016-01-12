<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EMP_ID),array('view','id'=>$data->EMP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_FONO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_FONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_EMAIL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_DESHABILITADO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_DESHABILITADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CREATE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_CREATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_MODIFIED')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_MODIFIED); ?>
	<br />

	*/ ?>

</div>
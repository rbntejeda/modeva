<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TRA_ID),array('view','id'=>$data->TRA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_MATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_FECHA_NAC')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_FECHA_NAC); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_LICENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_LICENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_MANEJO_SW')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_MANEJO_SW); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
?>

<?php
$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->TRA_ID,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Trabajador', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Trabajador', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Trabajador', 'url'=>array('update', 'id'=>$model->TRA_ID)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TRA_ID),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Trabajador '.$model->TRA_ID) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'TRA_ID',
		'COM_ID',
		'TRA_RUT',
		'TRA_NOMBRES',
		'TRA_PATERNO',
		'TRA_MATERNO',
		'TRA_FECHA_NAC',
		'TRA_DIRECCION',
		'TRA_TELEFONO',
		'TRA_CELULAR',
		'TRA_LICENCIA',
		'TRA_EMAIL',
		'TRA_MANEJO_SW',
	),
)); ?>
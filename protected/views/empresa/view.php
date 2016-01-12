<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->EMP_ID,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Empresa', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->EMP_ID)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_ID),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Empresa '.$model->EMP_ID) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'EMP_ID',
		'COM_ID',
		'EMP_RUT',
		'EMP_NOMBRE',
		'EMP_DIRECCION',
		'EMP_FONO',
		'EMP_EMAIL',
		'EMP_DESHABILITADO',
		'EMP_CREATE',
		'EMP_MODIFIED',
	),
)); ?>
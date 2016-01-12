<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->USU_ID,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuario', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Usuario', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->USU_ID)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USU_ID),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Usuario '.$model->USU_ID) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'USU_ID',
		'EMP_ID',
		'USU_RUT',
		'USU_NOMBRE',
		'USU_APELLIDOS',
		'USU_PASSWORD',
	),
)); ?>
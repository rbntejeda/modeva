<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
?>

<?php
$this->breadcrumbs=array(
	'Evaluacions'=>array('index'),
	$model->EVA_ID,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Evaluacion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Evaluacion', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Evaluacion', 'url'=>array('update', 'id'=>$model->EVA_ID)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Evaluacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EVA_ID),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Evaluacion', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Evaluacion '.$model->EVA_ID) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'EVA_ID',
		'TRA_ID',
		'EMP_ID',
		'MOD_ID',
		'EVA_NOTA',
		'EVA_FECHA',
		'EVA_INICIO',
	),
)); ?>
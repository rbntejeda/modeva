<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
?>

<?php
$this->breadcrumbs=array(
	'Evaluacions'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Evaluacion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Evaluacion', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Evaluacion') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
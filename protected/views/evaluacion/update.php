<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
?>

<?php
$this->breadcrumbs=array(
	'Evaluacions'=>array('index'),
	$model->EVA_ID=>array('view','id'=>$model->EVA_ID),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Evaluacion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Evaluacion', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Evaluacion', 'url'=>array('view', 'id'=>$model->EVA_ID)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Evaluacion', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Evaluacion '.$model->EVA_ID) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
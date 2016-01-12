<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
?>

<?php
$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->TRA_ID=>array('view','id'=>$model->TRA_ID),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Trabajador', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Trabajador', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Trabajador', 'url'=>array('view', 'id'=>$model->TRA_ID)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Trabajador '.$model->TRA_ID) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
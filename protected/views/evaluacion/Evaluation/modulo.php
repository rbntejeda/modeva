<?php
$this->breadcrumbs=array(
	'Evaluacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-list','label'=>'List Evaluacion', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Evaluacion', 'url'=>array('create')),
);
 ?>
<?php var_dump($model) ?>

<?= BsHtml::pageHeader('Módulo','') ?>

<div class="row">
<?php foreach ($model as $key => $value): ?>
	<div class="col-sm-6 col-md-4">

	</div>
<?php endforeach ?>
</div>
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

 <?php echo BsHtml::pageHeader('Ficha tecnica','Seleccione módulo') ?>

<div class="row">
<?php foreach ($model as $key => $value): ?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
	<?= CHtml::link(BsHtml::imageThumbnail(
		Yii::app()->request->baseUrl."/images/modulo/".$value->PER_IMG,'',
		$htmlOptions = array('style'=> 'width: 350px; height: 300px;border-radius: 15px;margin-top: 5px;')),
			array('evaluacion/module/'.$value->PER_ID)
		); ?>
		<h3><?= $value->PER_NOMBRE ?></h3>
        <p><?= $value->PER_DESCRIPCION ?></p>
		</div>
	</div>
<?php endforeach ?>
</div>
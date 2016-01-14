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

 <?php echo BsHtml::pageHeader('Seleccione','Perfil Técnico') ?>

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
        <?= BsHtml::button('Módulos', array('color' => BsHtml::BUTTON_COLOR_PRIMARY,'onclick'=>"window.location.href='module/$value->PER_ID'"));?>
        <?= BsHtml::button('Preguntas', array('color' => BsHtml::BUTTON_COLOR_INFO,'onclick'=>"window.location.href='demo/$value->PER_ID'"));?>
		</div>
	</div>
<?php endforeach ?>
</div>
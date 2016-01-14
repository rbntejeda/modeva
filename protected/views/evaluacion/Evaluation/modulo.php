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

<?= BsHtml::pageHeader('Módulos',$model2->PER_NOMBRE) ?>

<div class="row">
	<table class="table table-bordered table-striped">
		<tr>
			<th style="width:20px">#</th>
			<th>Módulo</th>
			<th style="width:85px">Opciones</th>
		</tr>
<?php foreach ($model as $key => $value): ?>
		<tr>
			<td><?=$key+1 ?></td>
			<td><?=$value->MOD_NOMBRE?></td>
			<td><?=BsHtml::button('Empezar', array(
					'color' => BsHtml::BUTTON_COLOR_PRIMARY,
					'size' => BsHtml::BUTTON_SIZE_MINI));?></td>
		</tr>
<?php endforeach ?>
	</table>

</div>
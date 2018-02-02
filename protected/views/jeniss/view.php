<?php
/* @var $this JenissController */
/* @var $model Jeniss */

$this->breadcrumbs=array(
	'Jenisses'=>array('index'),
	$model->id_jenis,
);

$this->menu=array(
	array('label'=>'List Jeniss', 'url'=>array('index')),
	array('label'=>'Create Jeniss', 'url'=>array('create')),
	array('label'=>'Update Jeniss', 'url'=>array('update', 'id'=>$model->id_jenis)),
	array('label'=>'Delete Jeniss', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jenis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jeniss', 'url'=>array('admin')),
);
?>

<h1>View Jeniss #<?php echo $model->id_jenis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jenis',
		'nama',
	),
)); ?>

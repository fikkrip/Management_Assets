<?php
/* @var $this KondisisController */
/* @var $model Kondisis */

$this->breadcrumbs=array(
	'Kondisi'=>array('index'),
	$model->id_kondisi,
);

$this->menu=array(
	array('label'=>'List Kondisi', 'url'=>array('index')),
	array('label'=>'Create Kondisi', 'url'=>array('create')),
	array('label'=>'Update Kondisi', 'url'=>array('update', 'id'=>$model->id_kondisi)),
	array('label'=>'Delete Kondisi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kondisi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kondisi', 'url'=>array('admin')),
);
?>

<h1>View Kondisi #<?php echo $model->id_kondisi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kondisi',
		'nama',
	),
)); ?>

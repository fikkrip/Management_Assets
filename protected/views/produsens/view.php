<?php
/* @var $this ProdusensController */
/* @var $model Produsens */

$this->breadcrumbs=array(
	'Produsens'=>array('index'),
	$model->id_produsen,
);

$this->menu=array(
	array('label'=>'List Produsens', 'url'=>array('index')),
	array('label'=>'Create Produsens', 'url'=>array('create')),
	array('label'=>'Update Produsens', 'url'=>array('update', 'id'=>$model->id_produsen)),
	array('label'=>'Delete Produsens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_produsen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produsens', 'url'=>array('admin')),
);
?>

<h1>View Produsens #<?php echo $model->id_produsen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_produsen',
		'nama',
		'alamat',
	),
)); ?>

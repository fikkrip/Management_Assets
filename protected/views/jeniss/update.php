<?php
/* @var $this JenissController */
/* @var $model Jeniss */

$this->breadcrumbs=array(
	'Jenisses'=>array('index'),
	$model->id_jenis=>array('view','id'=>$model->id_jenis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jeniss', 'url'=>array('index')),
	array('label'=>'Create Jeniss', 'url'=>array('create')),
	array('label'=>'View Jeniss', 'url'=>array('view', 'id'=>$model->id_jenis)),
	array('label'=>'Manage Jeniss', 'url'=>array('admin')),
);
?>

<h1>Update Jeniss <?php echo $model->id_jenis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
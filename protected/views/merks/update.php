<?php
/* @var $this MerksController */
/* @var $model Merks */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	$model->id_merk=>array('view','id'=>$model->id_merk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Merks', 'url'=>array('index')),
	array('label'=>'Create Merks', 'url'=>array('create')),
	array('label'=>'View Merks', 'url'=>array('view', 'id'=>$model->id_merk)),
	array('label'=>'Manage Merks', 'url'=>array('admin')),
);
?>

<h1>Update Merks <?php echo $model->id_merk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
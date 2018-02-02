<?php
/* @var $this ProdusensController */
/* @var $model Produsens */

$this->breadcrumbs=array(
	'Produsens'=>array('index'),
	$model->id_produsen=>array('view','id'=>$model->id_produsen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produsens', 'url'=>array('index')),
	array('label'=>'Create Produsens', 'url'=>array('create')),
	array('label'=>'View Produsens', 'url'=>array('view', 'id'=>$model->id_produsen)),
	array('label'=>'Manage Produsens', 'url'=>array('admin')),
);
?>

<h1>Update Produsens <?php echo $model->id_produsen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
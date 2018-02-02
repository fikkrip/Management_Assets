<?php
/* @var $this KondisisController */
/* @var $model Kondisis */

$this->breadcrumbs=array(
	'Kondisi'=>array('index'),
	$model->id_kondisi=>array('view','id'=>$model->id_kondisi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kondisi', 'url'=>array('index')),
	array('label'=>'Create Kondisi', 'url'=>array('create')),
	array('label'=>'View Kondisi', 'url'=>array('view', 'id'=>$model->id_kondisi)),
	array('label'=>'Manage Kondisi', 'url'=>array('admin')),
);
?>

<h1>Update Kondisi <?php echo $model->id_kondisi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

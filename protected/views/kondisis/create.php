<?php
/* @var $this KondisisController */
/* @var $model Kondisis */

$this->breadcrumbs=array(
	'Kondisi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kondisi', 'url'=>array('index')),
	array('label'=>'Manage Kondisi', 'url'=>array('admin')),
);
?>

<h1>Create Kondisi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

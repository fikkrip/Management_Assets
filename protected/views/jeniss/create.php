<?php
/* @var $this JenissController */
/* @var $model Jeniss */

$this->breadcrumbs=array(
	'Jenisses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jeniss', 'url'=>array('index')),
	array('label'=>'Manage Jeniss', 'url'=>array('admin')),
);
?>

<h1>Create Jeniss</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
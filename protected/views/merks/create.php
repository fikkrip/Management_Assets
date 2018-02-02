<?php
/* @var $this MerksController */
/* @var $model Merks */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Merks', 'url'=>array('index')),
	array('label'=>'Manage Merks', 'url'=>array('admin')),
);
?>

<h1>Create Merks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
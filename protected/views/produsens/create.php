<?php
/* @var $this ProdusensController */
/* @var $model Produsens */

$this->breadcrumbs=array(
	'Produsens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Produsens', 'url'=>array('index')),
	array('label'=>'Manage Produsens', 'url'=>array('admin')),
);
?>

<h1>Create Produsens</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
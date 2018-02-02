<?php
/* @var $this MerksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Merks',
);

$this->menu=array(
	array('label'=>'Create Merks', 'url'=>array('create')),
	array('label'=>'Manage Merks', 'url'=>array('admin')),
);
?>

<h1>Merks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

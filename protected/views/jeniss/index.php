<?php
/* @var $this JenissController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenisses',
);

$this->menu=array(
	array('label'=>'Create Jeniss', 'url'=>array('create')),
	array('label'=>'Manage Jeniss', 'url'=>array('admin')),
);
?>

<h1>Jenisses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

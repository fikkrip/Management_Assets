<?php
/* @var $this KondisisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kondisi',
);

$this->menu=array(
	array('label'=>'Create Kondisi', 'url'=>array('create')),
	array('label'=>'Manage Kondisi', 'url'=>array('admin')),
);
?>

<h1>Kondisi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

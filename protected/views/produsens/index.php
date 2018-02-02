<?php
/* @var $this ProdusensController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produsens',
);

$this->menu=array(
	array('label'=>'Create Produsens', 'url'=>array('create')),
	array('label'=>'Manage Produsens', 'url'=>array('admin')),
);
?>

<h1>Produsens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this MerksController */
/* @var $model Merks */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	$model->id_merk,
);

$this->menu=array(
	array('label'=>'List Merks', 'url'=>array('index')),
	array('label'=>'Create Merks', 'url'=>array('create')),
	array('label'=>'Update Merks', 'url'=>array('update', 'id'=>$model->id_merk)),
	array('label'=>'Delete Merks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_merk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Merks', 'url'=>array('admin')),
);

$sql= Produsens::model()->findAllByAttributes(array('id_produsen'=>$model->produsen));
foreach ($sql as $i)
{
	echo CHtml::encode($i->nama);
}
?>

<h1>View Merks #<?php echo $model->id_merk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_merk',
		'nama',
		[
				'label'=>'Produsen',
				'value'=>$i->nama,
		]
	),
)); ?>

<?php
/* @var $this MerksController */
/* @var $data Merks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_merk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_merk), array('view', 'id'=>$data->id_merk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produsen')); ?>:</b>
	<?php	echo CHtml::encode($data->produsen0->nama);	?>
	<br />


</div>

<?php
/* @var $this JenissController */
/* @var $data Jeniss */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jenis), array('view', 'id'=>$data->id_jenis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />


</div>
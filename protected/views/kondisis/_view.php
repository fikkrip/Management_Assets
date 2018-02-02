<?php
/* @var $this KondisisController */
/* @var $data Kondisis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kondisi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kondisi), array('view', 'id'=>$data->id_kondisi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />


</div>
<?php
/* @var $this ProdusensController */
/* @var $data Produsens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_produsen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_produsen), array('view', 'id'=>$data->id_produsen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />


</div>
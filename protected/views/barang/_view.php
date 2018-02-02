<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_barang), array('view', 'id'=>$data->id_barang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis0->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merk')); ?>:</b>
	<?php echo CHtml::encode($data->merk0->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi0->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />


</div>

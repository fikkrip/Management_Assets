<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->dropDownList($model,'jenis',CHtml::listData(Jeniss::model()->findAll(), 'id_jenis', 'nama'),array('id_jenis' => 'nama', 'empty'=>'--Pilih Jenis--')); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merk'); ?>
		<?php echo $form->dropDownList($model,'merk',CHtml::listData(Merks::model()->findAll(), 'id_merk', 'nama'),array('id_merk' => 'nama', 'empty'=>'--Pilih Merk--')); ?>
		<?php echo $form->error($model,'merk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kondisi'); ?>
		<?php echo $form->dropDownList($model,'kondisi',CHtml::listData(Kondisis::model()->findAll(), 'id_kondisi', 'nama'),array('id_kondisi' => 'nama', 'empty'=>'--Pilih Kondisi--')); ?>
		<?php echo $form->error($model,'kondisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

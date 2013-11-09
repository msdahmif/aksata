<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'online-presence-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'member'); ?>
		<?php echo $form->textField($model,'member',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service'); ?>
		<?php echo $form->textField($model,'service',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'handle'); ?>
		<?php echo $form->textField($model,'handle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'handle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
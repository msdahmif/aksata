<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workgroup-membership-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'workgroup'); ?>
		<?php
		$workgroup_list = CHtml::listData(Workgroup::model()->findAll(), 'id', 'name');
		$options = array(
				'tabindex' => '0',
		);
		?>
		<?php echo $form->dropDownList($model,'workgroup', $workgroup_list, $options); ?>
		<?php echo $form->error($model,'workgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
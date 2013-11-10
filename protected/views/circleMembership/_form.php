<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'circle-membership-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'member'); ?>
		<?php
		$member_list = CHtml::listData(Member::model()->findAll(), 'NIM', 'fullname');
		$options = array(
				'tabindex' => '0',
		);
		?>
		<?php echo $form->dropDownList($model,'member', $member_list, $options); ?>
		<?php echo $form->error($model,'member'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
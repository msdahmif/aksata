<div class="form">

<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'external-activity-membership-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'external_activity'); ?>
		<?php
		$external_activity_list = CHtml::listData(ExternalActivity::model()->findAll(), 'id', 'name');
		$options = array(
				'tabindex' => '0',
		);
		?>
		<?php echo $form->dropDownList($model,'external_activity', $external_activity_list, $options); ?>
		<?php echo $form->error($model,'external_activity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start'); ?>
		<?php
			$this->widget('CJuiDateTimePicker',array(
			'model'=>$model,
			'attribute'=>'start',
			'mode'=>'date',
			'options'=>array(
				"dateFormat"=>'yy-mm-dd'
			)
			));
		 ?>
		<?php echo $form->error($model,'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php
			$this->widget('CJuiDateTimePicker',array(
			'model'=>$model,
			'attribute'=>'end',
			'mode'=>'date',
			'options'=>array(
				"dateFormat"=>'yy-mm-dd'
			)
			));
		 ?>
		<?php echo $form->error($model,'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'program-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
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
		<?php echo $form->labelEx($model,'finish'); ?>
		<?php
			$this->widget('CJuiDateTimePicker',array(
			'model'=>$model,
			'attribute'=>'finish',
			'mode'=>'date',
			'options'=>array(
				"dateFormat"=>'yy-mm-dd'
			)
			));
		 ?>
		<?php echo $form->error($model,'finish'); ?>
	</div>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workgroup-form',
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
		<?php echo $form->labelEx($model,'kepengurusan'); ?>
		<?php echo $form->textField($model,'kepengurusan',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'kepengurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent'); ?>
		<?php
		$parent_list = CHtml::listData(Workgroup::model()->findAll(), 'id', 'name');
		$options = array(
				'tabindex' => '0',
				'empty' => '(nope)',
		);
		?>
		<?php echo $form->dropDownList($model,'parent', $parent_list, $options); ?>
		<?php echo $form->error($model,'parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lembaga'); ?>
		<?php echo $form->textField($model,'lembaga',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'lembaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leader'); ?>
		<?php echo $form->textField($model,'leader'); ?>
		<?php echo $form->error($model,'leader'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leaderTitle'); ?>
		<?php echo $form->textField($model,'leaderTitle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'leaderTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isPseudo'); ?>
		<?php
		$options = array(
				'tabindex' => '0',
		);
		?>
		<?php echo $form->dropDownList($model,'isPseudo', array('Bukan','Ya'), $options); ?>
		<?php echo $form->error($model,'isPseudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
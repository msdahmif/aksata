<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('program')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->program), array('view', 'id'=>$data->program)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member')); ?>:</b>
	<?php echo CHtml::encode($data->member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />


</div>
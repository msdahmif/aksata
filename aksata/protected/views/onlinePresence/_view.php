<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('member')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->member), array('view', 'id'=>$data->member)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handle')); ?>:</b>
	<?php echo CHtml::encode($data->handle); ?>
	<br />


</div>
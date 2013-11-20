<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('circle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->circle), array('view', 'id'=>$data->circle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member')); ?>:</b>
	<?php echo CHtml::encode($data->member); ?>
	<br />


</div>
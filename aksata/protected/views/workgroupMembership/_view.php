<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('workgroup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->workgroup), array('view', 'id'=>$data->workgroup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member')); ?>:</b>
	<?php echo CHtml::encode($data->member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>
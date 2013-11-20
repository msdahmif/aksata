<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepengurusan')); ?>:</b>
	<?php echo CHtml::encode($data->kepengurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lembaga')); ?>:</b>
	<?php echo CHtml::encode($data->lembaga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leader')); ?>:</b>
	<?php echo CHtml::encode($data->leader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leaderTitle')); ?>:</b>
	<?php echo CHtml::encode($data->leaderTitle); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('isPseudo')); ?>:</b>
	<?php echo CHtml::encode($data->isPseudo); ?>
	<br />

	*/ ?>

</div>
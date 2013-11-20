<?php
$this->breadcrumbs=array(
	'External Activity Memberships'=>array('index'),
	$model->external_activity,
);

$this->menu=array(
	array('label'=>'List ExternalActivityMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create ExternalActivityMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Update ExternalActivityMembership', 'url'=>array('update', 'id'=>$model->external_activity,'member'=>$member)),
	array('label'=>'Delete ExternalActivityMembership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->external_activity,'member'=>$member),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalActivityMembership', 'url'=>array('admin')),
);
?>

<h1>View ExternalActivityMembership #<?php echo $model->external_activity; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'member',
		'external_activity',
		'role',
		'start',
		'end',
		'description',
	),
)); ?>

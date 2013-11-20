<?php
$this->breadcrumbs=array(
	'Workgroup Memberships'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List WorkgroupMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create WorkgroupMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Update WorkgroupMembership', 'url'=>array('update', 'id'=>$model->workgroup,'member'=>$member)),
	array('label'=>'Delete WorkgroupMembership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->workgroup,'member'=>$member),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkgroupMembership', 'url'=>array('admin')),
);
?>

<h1>View WorkgroupMembership #<?php echo $model->workgroup; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'member',
		'workgroup',
		'title',
	),
)); ?>

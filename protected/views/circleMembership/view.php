<?php
$this->breadcrumbs=array(
	'Circle Memberships'=>array('index'),
	$model->circle,
);

$this->menu=array(
	array('label'=>'List CircleMembership', 'url'=>array('index','id'=>$model->id)),
	array('label'=>'Create CircleMembership', 'url'=>array('create','id'=>$model->id)),
	array('label'=>'Update CircleMembership', 'url'=>array('update', 'id'=>$model->circle,'member'=>$model->member)),
	array('label'=>'Delete CircleMembership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->circle,'member'=>$model->member),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CircleMembership', 'url'=>array('admin')),
);
?>

<h1>View CircleMembership #<?php echo $model->circle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'circle',
		'member',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Online Presences'=>array('index'),
	$model->member,
);

$this->menu=array(
	array('label'=>'List OnlinePresence', 'url'=>array('index')),
	array('label'=>'Create OnlinePresence', 'url'=>array('create')),
	array('label'=>'Update OnlinePresence', 'url'=>array('update', 'id'=>$model->member)),
	array('label'=>'Delete OnlinePresence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->member),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OnlinePresence', 'url'=>array('admin')),
);
?>

<h1>View OnlinePresence #<?php echo $model->member; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'member',
		'service',
		'handle',
	),
)); ?>

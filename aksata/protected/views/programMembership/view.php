<?php
$this->breadcrumbs=array(
	'Program Memberships'=>array('index'),
	$model->program,
);

$this->menu=array(
	array('label'=>'List ProgramMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create ProgramMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Update ProgramMembership', 'url'=>array('update', 'id'=>$model->program,'member'=>$member)),
	array('label'=>'Delete ProgramMembership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->program,'member'=>$member),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProgramMembership', 'url'=>array('admin')),
);
?>

<h1>View ProgramMembership #<?php echo $model->program; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'member',
		'program',
		'role',
		'score',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Workgroups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Workgroup', 'url'=>array('index')),
	array('label'=>'Create Workgroup', 'url'=>array('create')),
	array('label'=>'Update Workgroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Workgroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>View Workgroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'kepengurusan',
		'parent',
		'lembaga',
		'leader',
		'leaderTitle',
		'isPseudo',
	),
)); ?>

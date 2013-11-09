<?php
$this->breadcrumbs=array(
	'Circles'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Circle', 'url'=>array('index')),
	array('label'=>'Create Circle', 'url'=>array('create')),
	array('label'=>'Update Circle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Circle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Circle', 'url'=>array('admin')),
);
?>

<h1>View Circle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>

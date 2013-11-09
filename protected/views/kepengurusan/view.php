<?php
$this->breadcrumbs=array(
	'Kepengurusans'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Kepengurusan', 'url'=>array('index')),
	array('label'=>'Create Kepengurusan', 'url'=>array('create')),
	array('label'=>'Update Kepengurusan', 'url'=>array('update', 'id'=>$model->year)),
	array('label'=>'Delete Kepengurusan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->year),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kepengurusan', 'url'=>array('admin')),
);
?>

<h1>View Kepengurusan #<?php echo $model->year; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'year',
		'title',
	),
)); ?>

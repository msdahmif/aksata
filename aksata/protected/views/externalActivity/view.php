<?php
$this->breadcrumbs=array(
	'External Activities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ExternalActivity', 'url'=>array('index')),
	array('label'=>'Create ExternalActivity', 'url'=>array('create')),
	array('label'=>'Update ExternalActivity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalActivity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalActivity', 'url'=>array('admin')),
);
?>

<h1>View ExternalActivity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'externalITB',
	),
)); ?>

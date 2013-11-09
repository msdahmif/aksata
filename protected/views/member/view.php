<?php
$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->NIM,
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Update Member', 'url'=>array('update', 'id'=>$model->NIM)),
	array('label'=>'Delete Member', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>View Member #<?php echo $model->NIM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIM',
		'fullname',
		'nickname',
		'address',
		'phone',
		'status',
		'picture',
		'dob',
		'batch',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Workgroups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Workgroup', 'url'=>array('index')),
	array('label'=>'Create Workgroup', 'url'=>array('create')),
	array('label'=>'View Workgroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>Update Workgroup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
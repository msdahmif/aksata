<?php
$this->breadcrumbs=array(
	'External Activities'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalActivity', 'url'=>array('index')),
	array('label'=>'Create ExternalActivity', 'url'=>array('create')),
	array('label'=>'View ExternalActivity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalActivity', 'url'=>array('admin')),
);
?>

<h1>Update ExternalActivity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
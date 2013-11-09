<?php
$this->breadcrumbs=array(
	'Kepengurusans'=>array('index'),
	$model->title=>array('view','id'=>$model->year),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kepengurusan', 'url'=>array('index')),
	array('label'=>'Create Kepengurusan', 'url'=>array('create')),
	array('label'=>'View Kepengurusan', 'url'=>array('view', 'id'=>$model->year)),
	array('label'=>'Manage Kepengurusan', 'url'=>array('admin')),
);
?>

<h1>Update Kepengurusan <?php echo $model->year; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
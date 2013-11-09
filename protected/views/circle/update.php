<?php
$this->breadcrumbs=array(
	'Circles'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Circle', 'url'=>array('index')),
	array('label'=>'Create Circle', 'url'=>array('create')),
	array('label'=>'View Circle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Circle', 'url'=>array('admin')),
);
?>

<h1>Update Circle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
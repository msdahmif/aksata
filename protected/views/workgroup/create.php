<?php
$this->breadcrumbs=array(
	'Workgroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Workgroup', 'url'=>array('index')),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>Create Workgroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
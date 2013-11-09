<?php
$this->breadcrumbs=array(
	'External Activities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalActivity', 'url'=>array('index')),
	array('label'=>'Manage ExternalActivity', 'url'=>array('admin')),
);
?>

<h1>Create ExternalActivity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
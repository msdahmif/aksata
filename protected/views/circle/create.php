<?php
$this->breadcrumbs=array(
	'Circles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Circle', 'url'=>array('index')),
	array('label'=>'Manage Circle', 'url'=>array('admin')),
);
?>

<h1>Create Circle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
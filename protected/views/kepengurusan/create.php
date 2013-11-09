<?php
$this->breadcrumbs=array(
	'Kepengurusans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kepengurusan', 'url'=>array('index')),
	array('label'=>'Manage Kepengurusan', 'url'=>array('admin')),
);
?>

<h1>Create Kepengurusan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
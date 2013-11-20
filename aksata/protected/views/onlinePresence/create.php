<?php
$this->breadcrumbs=array(
	'Online Presences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OnlinePresence', 'url'=>array('index')),
	array('label'=>'Manage OnlinePresence', 'url'=>array('admin')),
);
?>

<h1>Create OnlinePresence</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
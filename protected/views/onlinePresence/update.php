<?php
$this->breadcrumbs=array(
	'Online Presences'=>array('index'),
	$model->member=>array('view','id'=>$model->member),
	'Update',
);

$this->menu=array(
	array('label'=>'List OnlinePresence', 'url'=>array('index')),
	array('label'=>'Create OnlinePresence', 'url'=>array('create')),
	array('label'=>'View OnlinePresence', 'url'=>array('view', 'id'=>$model->member)),
	array('label'=>'Manage OnlinePresence', 'url'=>array('admin')),
);
?>

<h1>Update OnlinePresence <?php echo $model->member; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
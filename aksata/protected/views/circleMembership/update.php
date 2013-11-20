<?php
$this->breadcrumbs=array(
	'Circle Memberships'=>array('index'),
	$model->circle=>array('view','id'=>$model->circle),
	'Update',
);

$this->menu=array(
	array('label'=>'List CircleMembership', 'url'=>array('index','id'=>$model->id)),
	array('label'=>'Create CircleMembership', 'url'=>array('create','id'=>$model->id)),
	array('label'=>'View CircleMembership', 'url'=>array('view', 'id'=>$model->circle,'member'=>$model->member)),
	array('label'=>'Manage CircleMembership', 'url'=>array('admin')),
);
?>

<h1>Update CircleMembership <?php echo $model->circle; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
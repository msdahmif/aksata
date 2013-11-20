<?php
$this->breadcrumbs=array(
	'Program Memberships'=>array('index'),
	$model->program=>array('view','id'=>$model->program),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProgramMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create ProgramMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'View ProgramMembership', 'url'=>array('view', 'id'=>$model->program,'member'=>$member)),
	array('label'=>'Manage ProgramMembership', 'url'=>array('admin')),
);
?>

<h1>Update ProgramMembership <?php echo $model->program; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
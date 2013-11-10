<?php
$this->breadcrumbs=array(
	'Workgroup Memberships'=>array('index'),
	$model->title=>array('view','id'=>$model->workgroup),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkgroupMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create WorkgroupMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'View WorkgroupMembership', 'url'=>array('view', 'id'=>$model->workgroup,'member'=>$member)),
	array('label'=>'Manage WorkgroupMembership', 'url'=>array('admin')),
);
?>

<h1>Update WorkgroupMembership <?php echo $model->workgroup; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
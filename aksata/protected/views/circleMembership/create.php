<?php
$this->breadcrumbs=array(
	'Circle Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CircleMembership', 'url'=>array('index','id'=>$id)),
	array('label'=>'Manage CircleMembership', 'url'=>array('admin')),
);
?>

<h1>Create CircleMembership</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
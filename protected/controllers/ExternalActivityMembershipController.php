<?php

class ExternalActivityMembershipController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id,$member)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id,$member),
			'member'=>$member
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($member)
	{
		$model=new ExternalActivityMembership;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ExternalActivityMembership']))
		{
			$model->attributes=$_POST['ExternalActivityMembership'];
			$model->member = $member;
			if($model->save())
				$this->redirect(array('index','member'=>$member));
		}

		$this->render('create',array(
			'model'=>$model,
			'member'=>$member
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id,$member)
	{
		$model=$this->loadModel($id,$member);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ExternalActivityMembership']))
		{
			$model->attributes=$_POST['ExternalActivityMembership'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->external_activity));
		}

		$this->render('update',array(
			'model'=>$model,
			'member'=>$member
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id,$member)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id,$member)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($member)
	{
		$dataProvider=new CActiveDataProvider('ExternalActivityMembership',array(
			'criteria' => array(
				'condition' => "member = $member"
			)
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'member'=>$member
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ExternalActivityMembership('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ExternalActivityMembership']))
			$model->attributes=$_GET['ExternalActivityMembership'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id,$member)
	{
		$model=ExternalActivityMembership::model()->findByAttributes(
			array(
				'member' => $member,
				'external_activity' => $id
			)
		);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='external-activity-membership-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

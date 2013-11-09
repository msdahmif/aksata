<?php

/**
 * This is the model class for table "workgroup_membership".
 *
 * The followings are the available columns in table 'workgroup_membership':
 * @property string $member
 * @property integer $workgroup
 * @property string $title
 *
 * The followings are the available model relations:
 * @property Member $member0
 * @property Workgroup $workgroup0
 */
class WorkgroupMembership extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkgroupMembership the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'workgroup_membership';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member, workgroup', 'required'),
			array('workgroup', 'numerical', 'integerOnly'=>true),
			array('member', 'length', 'max'=>8),
			array('title', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('member, workgroup, title', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'member0' => array(self::HAS_ONE, 'Member', 'NIM'),
			'workgroup0' => array(self::BELONGS_TO, 'Workgroup', 'workgroup'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'member' => 'Member',
			'workgroup' => 'Workgroup',
			'title' => 'Title',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('member',$this->member,true);
		$criteria->compare('workgroup',$this->workgroup);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
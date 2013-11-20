<?php

/**
 * This is the model class for table "external_activity_membership".
 *
 * The followings are the available columns in table 'external_activity_membership':
 * @property string $member
 * @property integer $external_activity
 * @property string $role
 * @property string $start
 * @property string $end
 * @property string $description
 *
 * The followings are the available model relations:
 * @property ExternalActivity $externalActivity
 * @property Member $member0
 */
class ExternalActivityMembership extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalActivityMembership the static model class
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
		return 'external_activity_membership';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member, external_activity', 'required'),
			array('external_activity', 'numerical', 'integerOnly'=>true),
			array('member', 'length', 'max'=>8),
			array('role', 'length', 'max'=>45),
			array('start, end, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('member, external_activity, role, start, end, description', 'safe', 'on'=>'search'),
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
			'externalActivity' => array(self::HAS_ONE, 'ExternalActivity', 'id'),
			'member0' => array(self::BELONGS_TO, 'Member', 'member'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'member' => 'Member',
			'external_activity' => 'External Activity',
			'role' => 'Role',
			'start' => 'Start',
			'end' => 'End',
			'description' => 'Description',
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
		$criteria->compare('external_activity',$this->external_activity);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
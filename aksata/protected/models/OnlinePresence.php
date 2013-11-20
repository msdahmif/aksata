<?php

/**
 * This is the model class for table "online_presence".
 *
 * The followings are the available columns in table 'online_presence':
 * @property string $member
 * @property string $service
 * @property string $handle
 *
 * The followings are the available model relations:
 * @property Member $member0
 */
class OnlinePresence extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OnlinePresence the static model class
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
		return 'online_presence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member, handle', 'required'),
			array('member', 'length', 'max'=>8),
			array('service, handle', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('member, service, handle', 'safe', 'on'=>'search'),
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
			'service' => 'Service',
			'handle' => 'Handle',
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
		$criteria->compare('service',$this->service,true);
		$criteria->compare('handle',$this->handle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
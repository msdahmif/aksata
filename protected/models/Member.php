<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property string $NIM
 * @property string $fullname
 * @property string $nickname
 * @property string $address
 * @property string $phone
 * @property string $status
 * @property string $picture
 * @property string $dob
 * @property string $batch
 *
 * The followings are the available model relations:
 * @property Circle[] $circles
 * @property ExternalActivityMembership[] $externalActivityMemberships
 * @property WorkgroupMembership $nIM
 * @property OnlinePresence $onlinePresence
 * @property Program[] $programs
 */
class Member extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
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
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIM, fullname, status', 'required'),
			array('NIM', 'length', 'max'=>8),
			array('fullname', 'length', 'max'=>60),
			array('nickname, address, phone, picture', 'length', 'max'=>45),
			array('status', 'length', 'max'=>10),
			array('batch', 'length', 'max'=>4),
			array('dob', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NIM, fullname, nickname, address, phone, status, picture, dob, batch', 'safe', 'on'=>'search'),
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
			'circles' => array(self::MANY_MANY, 'Circle', 'circle_membership(member, circle)'),
			'externalActivityMemberships' => array(self::HAS_MANY, 'ExternalActivityMembership', 'member'),
			'nIM' => array(self::BELONGS_TO, 'WorkgroupMembership', 'NIM'),
			'onlinePresence' => array(self::HAS_ONE, 'OnlinePresence', 'member'),
			'programs' => array(self::MANY_MANY, 'Program', 'program_membership(member, program)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NIM' => 'NIM',
			'fullname' => 'Nama Lengkap',
			'nickname' => 'Nickname',
			'address' => 'Address',
			'phone' => 'Phone',
			'status' => 'Status',
			'picture' => 'Picture',
			'dob' => 'Tanggal Lahir',
			'batch' => 'Angkatan Pelantikan',
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

		$criteria->compare('NIM',$this->NIM,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('batch',$this->batch,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
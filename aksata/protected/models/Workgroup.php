<?php

/**
 * This is the model class for table "workgroup".
 *
 * The followings are the available columns in table 'workgroup':
 * @property integer $id
 * @property string $name
 * @property string $kepengurusan
 * @property integer $parent
 * @property string $lembaga
 * @property integer $leader
 * @property string $leaderTitle
 * @property integer $isPseudo
 *
 * The followings are the available model relations:
 * @property Kepengurusan $kepengurusan0
 * @property Program $id0
 * @property WorkgroupMembership[] $workgroupMemberships
 */
class Workgroup extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Workgroup the static model class
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
		return 'workgroup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kepengurusan', 'required'),
			array('parent, leader, isPseudo', 'numerical', 'integerOnly'=>true),
			array('name, leaderTitle', 'length', 'max'=>45),
			array('kepengurusan', 'length', 'max'=>4),
			array('lembaga', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, kepengurusan, parent, lembaga, leader, leaderTitle, isPseudo', 'safe', 'on'=>'search'),
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
			'kepengurusan0' => array(self::HAS_ONE, 'Kepengurusan', 'year'),
			'id0' => array(self::BELONGS_TO, 'Program', 'id'),
			'workgroupMemberships' => array(self::HAS_MANY, 'WorkgroupMembership', 'workgroup'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'kepengurusan' => 'Kepengurusan',
			'parent' => 'Parent',
			'lembaga' => 'Lembaga',
			'leader' => 'NIM Ketua',
			'leaderTitle' => 'Leader Title',
			'isPseudo' => 'Is Pseudo',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('kepengurusan',$this->kepengurusan,true);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('lembaga',$this->lembaga,true);
		$criteria->compare('leader',$this->leader);
		$criteria->compare('leaderTitle',$this->leaderTitle,true);
		$criteria->compare('isPseudo',$this->isPseudo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
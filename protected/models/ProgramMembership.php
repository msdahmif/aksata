<?php

/**
 * This is the model class for table "program_membership".
 *
 * The followings are the available columns in table 'program_membership':
 * @property string $member
 * @property integer $program
 * @property string $role
 * @property integer $score
 */
class ProgramMembership extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProgramMembership the static model class
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
		return 'program_membership';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member, program', 'required'),
			array('program, score', 'numerical', 'integerOnly'=>true),
			array('member', 'length', 'max'=>8),
			array('role', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('member, program, role, score', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'member' => 'Member',
			'program' => 'Program',
			'role' => 'Role',
			'score' => 'Score',
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
		$criteria->compare('program',$this->program);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('score',$this->score);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
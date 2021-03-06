<?php

class Post extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'Post':
	 * @var double $id
	 * @var double $userId
	 * @var double $amount
	 * @var integer $amountType
	 * @var string $description
	 * @var string $createTime
	 * @var string $updateTime
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return 'Post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('description','length','max'=>140),
			array('userId, amount, amountType, description, createTime, updateTime', 'required'),
			array('amountType', 'numerical', 'integerOnly'=>true),
			array('userId, amount', 'numerical'),
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
			'id' => 'Id',
			'userId' => 'User',
			'amount' => 'Amount',
			'amountType' => 'Amount Type',
			'description' => 'Description',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
		);
	}
}
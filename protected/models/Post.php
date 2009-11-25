<?php

class Post extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'posts':
	 * @var double $id
	 * @var double $user_id
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
		return 'posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('description','length','max'=>140),
			array('user_id, amount, amountType, description, createTime, updateTime', 'required'),
			array('amountType', 'numerical', 'integerOnly'=>true),
			array('user_id, amount', 'numerical'),
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
			'user_id' => 'User',
			'amount' => 'Amount',
			'amountType' => 'Amount Type',
			'description' => 'Description',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
		);
	}
}
<?php

class User extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'User':
	 * @var double $id
	 * @var string $username
	 * @var string $email
	 * @var string $password
	 * @var string $fullname
	 * @var double $balance
	 * @var string $verifyCode
	 * @var integer $verified
	 * @var string $createTime
	 * @var string $updateTime
	 */
	public $verificationCode;
	public $verificationPassword;
	

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
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('username','length','max'=>255),
			array('email','length','max'=>255),
			array('password','length','max'=>255),
			array('verificationPassword','length','max'=>255),
			array('fullname','length','max'=>255),
			array('verifyCode','length','max'=>255),
			array('fullname, username, email, password, verificationPassword, balance', 'required'),
			array('verified', 'numerical', 'integerOnly'=>true),
			array('balance', 'numerical'),
			array('email','email'),
			array('password','compare','compareAttribute'=> 'verificationPassword','on'=>'register'),
			array('verificationCode','captcha', 'allowEmpty'=>!extension_loaded('gd')),
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
	/*
	public function beforeSave()
	{
		if($this->getIsNewRecord()){
			$user->password = md5($user->password . Yii::app()->params['salt']);
			$user->createTime = date(DATE_ISO8601);
			$user->verifyCode = sha1($user->email . $user->createTime . Yii::app()->params['salt']);
		} else {
			$user->updateTime = date(DATE_ISO8601);
		}
	}
	*/

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'fullname' => 'Full Name',
			'balance' => 'Initial Balance',
			'verifyCode' => 'Verify Code',
			'verified' => 'Verified',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
			'verificationPassword'=>'Verification Password',
		);
	}
}

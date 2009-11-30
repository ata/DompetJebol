<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	const ERROR_USERNAME_OR_PASSWORD_INVALID = 3;
	
	private $profile;
	private $id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$username = strtolower($this->username);
		$password = md5($this->password . Yii::app()->params['salt']);
		
		$user = User::model()->find('LOWER(username) = ? AND password = ? AND verified = 1',
				array($username,$password));
		
		if($user === null) {
			$this->errorCode = self::ERROR_USERNAME_OR_PASSWORD_INVALID;
		} else {
			$this->profile = $user;
			$this->username = $user->username;
			$this->id = $user->id;
			$this->errorCode = self::ERROR_NONE;
		}

		return !$this->errorCode;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getProfile(){
		return $this->profile;
	}
}

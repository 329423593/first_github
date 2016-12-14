<?php
class User
{
	private $userName;
	private $passWord;

	public function __construct($userName, $passWord)
	{
		$this->userName = $userName;
		$this->passWord = $passWord;
	}

	public function getUserName()
	{
		return $this->userName;
	}
	public function getPassWord()
	{
		return $this->passWord;
	}

}

?>
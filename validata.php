<?php 
class validata
{
	static function validataUser(User $user)
	{
		$userName = $user->getUserName();
		$passWord = $user->getPassWord();

		unset($_SESSION['validataUserName'], $_SESSION['validataPassWord']);

		try {
			self::validataUserName($userName);
		} catch (Exception $e) {
			$_SESSION['validataUserName'] = $e->getMessage();
		}
		
		try {
			self::validataPassWord($passWord);
		} catch (Exception $e) {
			$_SESSION['validataPassWord'] = $e->getMessage();
		}
		
		if(isset($e)){
			throw $e;
		}
	}

	static private function validataUserName($userName)
	{
		if(strlen($userName) < 3)
		{
			throw new Exception("UserName cannot less than 3", 1);
		}

	}

	static private function validataPassWord($passWord)
	{
		if(strlen($passWord) < 3)
		{
			throw new Exception("PassWord cannot less than 3", 2);
		}
	}
}

?>

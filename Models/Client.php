<?php 
	//Models/Client.php
	namespace Models;
	use Models\Person as Person

	class Client extends Person
	{
		private $userName;
		private $passWord;

		public function getUsername()
		{
			return $this->userName;
		}

		public function setUsername($user)
		{
			$this->userName = $user;
		}

		public function getPassword()
		{
			return $this->passWord;
		}

		public function setPassword($pas)
		{
			$this->passWord = $pas;
		}
	}
?>
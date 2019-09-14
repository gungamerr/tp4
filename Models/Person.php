<?php
	//Models/Person.php
	namespace Models;

	abstract class Person
	{
		private $id;
		private $firstName;
		private $lastName;
		private $dni;
		private $email;

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getName()
		{
			return $this->firstName;
		}

		public function setName($name)
		{
			$this->firstName = $name;
		}

		public function getLastname()
		{
			return $this->lastName;
		}

		public function setSurname($surname)
		{
			$this->lastName = $surname;
		}

		public function getDni()
		{
			return $this->dni;
		}

		public function setDni($dni)
		{
			$this->dni = $dni;
		}

		public function getEmail()
		{
			return $this->$email;
		}

		public function setEmail($email)
		{
			$this->$email = $email;
		}

	}
?>
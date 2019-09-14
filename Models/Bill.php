<?php
	//Models/Bill.php
	namespace Models;

	class Bill
	{
		private $date;
		private $type;
		private $number;

		public function getDate()
		{
			return $this->date;
		}

		public function setDate($dia,$mes,$anio)
		{
			$this->date = mktime($mes,$dia,$anio);
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->type = $type;
		}

		public function getNumber()
		{
			return $this->number;
		}

		public function setNumber($number)
		{
			$this->number = $number;
		}
	}
?>
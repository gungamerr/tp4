<?php 
	//Models/Item.php
	namespace Models;

	class Item
	{
		private $name;
		private $description;
		private $price;
		private $quantity;

		public function getName()
		{
			return $this->name;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function setDescription($descript)
		{
			$this->description = $descript;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function setPrice($price)
		{
			$this->price = $price;
		}

		public function getQuantity()
		{
			return $this->quantity = $quantity;
		}

		public function setQuantity($quantity)
		{
			$this->quantity = $quantity;
		}

	}

?>
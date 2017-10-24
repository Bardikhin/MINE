<?php
abstract class Drawings {
	private $price;
	private $count;
	public function __construct($price,$count){
		$this->price = $price;
		$this->count = $count;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getCount() {
		return $this->count;
	}
}

interface gettingSize {
	public function getSize();
}

class BallpointPen extends Drawings implements gettingSize {
	private $size;
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	public function getSize() {
		return $this->size;
	}
}
class Car extends Drawings implements gettingSize {
	private $size;
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	public function getSize() {
		return $this->size;
	}
}
class Duck extends Drawings implements gettingSize {
	private $size;
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	public function getSize() {
		return $this->size;
	}
}
class TV extends Drawings implements gettingSize {
	private $size;
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	public function getSize() {
		return $this->size;
	}
}
class Product extends Drawings implements gettingSize {
	private $size;
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	public function getSize() {
		return $this->size;
	}
}

echo 'Полиформизм это замена одинаковых частей одним и тем же. Наследование  - это когда подкласс наследует что-нибудь от родителя. <br />';
echo 'Методы интерфеса необходимо реализовывать в классе. А в абстрактном классе они уже могут быть реализованы <br />';
?>
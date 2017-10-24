<?php
class Car {
	public $color;
	public $typeOfTransmission;
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}
	public function getColor() {
		return $this->color;
	}
	public function setTypeOfTransmission($typeOfTransmission) {
		$this->typeOfTransmission = $typeOfTransmission;
		return $this;
	}
	public function gettypeOfTransmission() {
		return $this->typeOfTransmission;
	}
}
$niva = new Car;
$niva
	->setColor('Зеленая')
	->setTypeOfTransmission('Автомат');
$ladaSedan = new Car;
$ladaSedan
	->setColor('Баклажан')
	->setTypeOfTransmission('Механика');


class TV {
	public $type;
	public $diagonal;
	public function setType($type) {
		$this->type = $type;
		return $this;
	}
	public function getType() {
		return $this->type;
	}
	public function setDiagonal($diagonal) {
		$this->diagonal = $diagonal;
		return $this;
	}
	public function getDiagonal() {
		return $this->diagonal;
	}
}
$samsung = new TV;
$samsung
	->setType('Кинескопный')
	->setDiagonal('23');
$toshiba = new TV;
$toshiba
	->setType('Плоский')
	->setDiagonal('32');


class BallpointPen {
	public $colorOfRod;
	public $length;
	public function setColorOfRod($colorOfRod) {
		$this->colorOfRod = $colorOfRod;
		return $this;
	}
	public function getColorOfRod() {
		return $this->colorOfRod;
	}
	public function setLength($length) {
		$this->length = $length;
		return $this;
	}
	public function getLength() {
		return $this->length;
	}
}
$erihcrouser = new BallpointPen;
$erihcrouser
	->setColorOfRod('Красная')
	->setLength('23');
$penName = new BallpointPen;
$penName
	->setColorOfRod('Черная')
	->setLength('24');


class Duck {
	public $flying;
	public $shapeOfBeak;
	public function setFlying($flying) {
		$this->flying = $flying;
		return $this;
	}
	public function getFlying() {
		return $this->flying;
	}
	public function setShapeOfBeak($shapeOfBeak) {
		$this->shapeOfBeak = $shapeOfBeak;
		return $this;
	}
	public function getShapeOfBeak() {
		return $this->shapeOfBeak;
	}
}
$homeDuck = new Duck;
$homeDuck
	->setFlying('y')
	->setShapeOfBeak('С ноготком');
$mallard = new Duck;
$mallard
	->setFlying('y')
	->setShapeOfBeak('С гребенчатыми пластинками');


class Product {
	public $price;
	public $edibility;
	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}
	public function getPrice() {
		return $this->price;
	}
	public function setEdibility($edibility) {
		$this->edibility = $edibility;
		return $this;
	}
	public function getEdibility() {
		return $this->edibility;
	}
}
$apple = new Product;
$apple
	->setPrice('3')
	->setEdibility('+');
$table = new Product;
$table
	->setPrice('300')
	->setEdibility('-');

echo 'Инкапсуляция это когда все что требуется для одного дела, лежит в одном месте. Поговорка о яйцах в одной корзине приобретает здесь особый смысл <br />';
echo 'Плюсы объектов в том, что всю систему можно структуризировать, минусы - не все объекты можно поместить в один класс <br />';
?>
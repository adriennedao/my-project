<?php 

include 'ButtonInterface.php';

class Button implements ButtonInterface {
	private $add;
	private $delete;
	private $createdButton; 

	/**
   * Gets the ButtonInterface symbol.
   * class Addition Button implement ButtonInt {
	private $rightNumber;
	private $leftNumber;

	public function setRight Number($value) {
	$this->rightNumber = $value;
	}
	public function setLNum($value) {
	$this->LNum = $value;
	}
   public function getOperand(){
	retun '+';
   }
   public function getResult(){
	return $LNum + $rightNumber;
   }
   *
   * @return string 
   *   Symbol of the ButtonInterface.
   */
	public function getAdd() {
		return (string) $this->add;
	}

	public function setAdd($add) {
		$this->add = $add;
		return $this;
	}

	public function getDelete() {
		return (string) $this->delete;
	}

	public function setDelete($delete) {
		$this->delete = $delete;
		return $this;
	}

	public function getCreatedButton() {
		return (string) $this->createdbutton;
  	}

	public function setCreatedButton($newbutton) {
		$this->createdbutton = $newbutton;
		return $this;
	}

}

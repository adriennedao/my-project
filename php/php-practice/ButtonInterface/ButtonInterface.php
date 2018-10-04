<?php
/**
* Provide interface for defining Button Interface.
*
*/
interface ButtonInterface {

/**
   * Gets the Button Interface configuration.
**/
   public function setRightNumber($value){
     $this->leftNumber = $value;
     }
  public function setLeftNumber($value) {
     $this->setletNumber = $value;
   }
   public function getOperand();
   public function getResult();

    @return string



    class simpleCalculator {
      private $buttons;
      private $leftNumber;
      private $rightNumber;
      private $button;

      public function setButton(ButtonInterface $button) {
        if (empty($this->buttons)) {
       $this->buttons = [];
       }
        $this->buttons[] = $button;
        $this->activeButton = $button;
   }
    public function inputNumber($value) {
      if(!empty($this->activeButton)) {
        $this->rightNumber = $value;
        return;

     }
        $this->leftNumber = $value;
    }
    public function getResult(){
      $this->activeButton->setRightNumber($this->rightNumber);
      $this->activeButton->setLeftNumber($this->rightNumber);
      $leftNumber = $this->leftNumber;

       $result = $this->activeButton->getResult();
       retun results;
    }
  }

  $calculator = new simpleCalculator();
  $addition_button = new AdditionButton();
  $subtraction_button = new SubTractionButton();

  $calculator->inputNumber(3);
  $calculator->setButton($addition_button);
            $calculator->inputNumber(4);



  public function getAdd();
  /**
   * Gets the Button to do this.
   *
   * @return string
   *
   *
   */
  public function setAdd($add);
  /**
   * Sets the Button to do this.
   *
   * @return string
   *
   */
  public function getDelete();
  /**
   * Gets the Button to do that.
   *
   * @return string
   *
   */
  public function setDelete($delete);
  /**
   * Sets the Button to do that.
   *
   * @return string
   *
   */

  public function getCreatedButton();
  /**
   * Sets the Button to CreatedButton.
   *
   * @return string
   *
   */
  public function setCreatedButton($newbutton);
  /**
   * Sets the Button to setCreatedButton.
   *
   * @return string
   *
   */
}

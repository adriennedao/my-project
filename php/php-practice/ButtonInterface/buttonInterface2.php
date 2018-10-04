 <?php

print '<h1>My PHP File</h1>';
print '<br><br>';

interface ButtonInterface {
    public function setRightNumber($value);
    public function setLeftNumber($value);
    public function getOperand();
    public function getResult();
}

class AdditionButton implements ButtonInterface {
    private $rightNumber;
    private $leftNumber;

    public function setRightNumber($value) {
        $this->rightNumber = $value;
    }

    public function setLeftNumber($value) {
        $this->leftNumber = $value;
    }

    public function getOperand() {
        return '+';
    }
    public function getResult() {
        return $this->rightNumber + $this->leftNumber;
    }
}

class SubtractionButton implements ButtonInterface {
    private $rightNumber;
    private $leftNumber;

    public function setRightNumber($value) {
        $this->rightNumber = $value;
    }

    public function setLeftNumber($value) {
        $this->leftNumber = $value;
    }

    public function getOperand() {
        return '-';
    }
    public function getResult() {
        return $this->leftNumber - $this->rightNumber;
    }
}

class simpleCalculator {
    private $buttons;
    private $leftNumber;
    private $rightNumber;
    private $activeButton;

    public function setButton(ButtonInterface $button) {
        if (empty($this->buttons)) {
            $this->buttons = [];
        }
        $this->buttons[] = $button;
        $this->activeButton = $button;
    }

    public function inputNumber($value) {
        if (!empty($this->activeButton)) {
            $this->rightNumber = $value;
            return;
        }
        $this->leftNumber = $value;
    }

    public function getResult() {
        $this->activeButton->setRightNumber($this->rightNumber);
        $this->activeButton->setLeftNumber($this->leftNumber);
        $leftNumber = $this->leftNumber;
        $rightNumber = $this->rightNumber;
        $operand = $this->activeButton->getOperand();
        $result = $this->activeButton->getResult();
        $this->activeButton = null;
        return "$leftNumber $operand $rightNumber = $result";
    }
}

$calculator = new simpleCalculator();
$addition_button = new AdditionButton();
$subtraction_button = new SubtractionButton();

$calculator->inputNumber(3);
$calculator->setButton($addition_button);
$calculator->inputNumber(4);
print $calculator->getResult();

print '<br>';
$calculator->inputNumber(9);
$calculator->setButton($subtraction_button);
$calculator->inputNumber(4);
print $calculator->getResult();

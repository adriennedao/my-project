<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

require 'ChimeCounter.php';

  class chimeCounterTests extends PHPUnit_Framework_TestCase {
    private$chimeCounter;
    protected function setUp()
    {
      $this->chimeCounter = new chimeCounter();
    }
      protected function tearDown()
    {
      $this->chimeCounter = NULL;
    }

    public function addDataProvider() {
      return array(
        array('2:00','3:00',5),
        array('14:00','15:00',5),
        array('14:23','15:42',3),
        array('23:00','1:00',24),
      );
    }
  /**
  * challenge
  */
    public function testAdd($a, $b, $expected)
    {
      $result = $this->chimeCounter->countChimes($a,$b);
      $this->assertEquals($expected, $result);
      }
    }
  ?>

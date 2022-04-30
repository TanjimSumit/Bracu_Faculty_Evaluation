<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of start_evaluationTest
 *
 * @author Tanjim
 */
include ("..\Model\start_evaluation.php");

class start_evaluationTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $object = null;

    public function setUp() {
        $this->object = new start_evaluation();
    }

    /** @test */
    public function Teststart_evaluation() {
        $actual = $this->object->st_eva();
        $this->assertSame(0, $actual);
    }

}

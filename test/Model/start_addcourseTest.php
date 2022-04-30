<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of start_addcourseTest
 *
 * @author Tanjim
 */
include ("..\Model\start_addcourse.php");

class start_addcourseTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $object = null;

    public function setUp() {
        $this->object = new start_addcourse;
    }

    /** @test */
    public function Teststart_addcourse() {
        $actual = $this->object->add();
        $this->assertSame(0, $actual);
    }

}

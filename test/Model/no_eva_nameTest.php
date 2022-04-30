<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of no_eva_nameTest
 *
 * @author Tanjim
 */
include ("..\Model\no_eva_name.php");

class no_eva_nameTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $object = null;

    public function setUp() {
        $this->object = new no_eva_name;
    }

    /** @test */
    public function no_eva_nameTest() {
        $actual = $this->object->no_eva();
        $this->assertSame(0, $actual);
    }

}

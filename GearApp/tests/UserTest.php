<?php
	require 'User.php';

	class UserTest extends PHPUnit_Framework_TestCasa
	{
		public $UserInstance;
		public function setUp(){
			$this->UserInstance = new UserTest();
		}

		public function testIfWorks(){
			$this->UserInstance->setLogin("mahdi");
			$this->assertEquals("hdi",$this->UserInstance->getLogin());
		}
	}

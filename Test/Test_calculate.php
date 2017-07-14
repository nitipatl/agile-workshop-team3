<?php
include("calculate.php");
class Test_calculate extends \PHPUnit\Framework\TestCase {
	function testAdd() {
		$expected = 2;
		$inputa  =1;
		$inputb  =1;
		$actual = Add($inputa,$inputb);
		
		$this->assertEquals($expected,$actual);
	}
	function testodd() {
		$expected = 2;
		$inputa  =5;
		$inputb  =3;
		$actual = odd($inputa,$inputb);
		
		$this->assertEquals($expected,$actual);
	}
}
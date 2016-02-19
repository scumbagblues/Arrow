<?php

namespace Arrow\HelloWorld\Test\Unit;

use Arrow\HelloWorld\Model\Source\Align;

class AlignTest extends \PHPUnit_Framework_TestCase{


	/**
	*Test case to proof that toArray methods works fine
	**/

	public function testAlignToArrayOption(){
		$alignClass = new Align();
		$alignArray = $alignClass->toArray();

		//var_dump($alignArray);	

		return $alignArray;
	}
}
<?php
require_once(dirname(dirname(__FILE__)) . '/src/t73biz/SiteUxAnalyzer/SiteUxAnalyzer.php');
use t73biz\SiteUxAnalyzer\SiteUxAnalyzer as myClass;

class SiteUxAnalyzerTest extends PHPUnit_Framework_TestCase
{
	public function testCanBeNegated () {
		$a = new myClass();
		$a->increase(9)->increase(8);
		$b = $a->negate();
		$this->assertEquals(0, $b->myParam);
	}

}

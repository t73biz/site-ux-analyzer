<?php
/**
 * site-ux-analyzer
 * @package SiteUxAnalyzer
 * @version 0.1.0
 * @link https://github.com/t73biz/site-ux-analyzer
 * @author t73biz <https://github.com/t73biz>
 * @license https://github.com/t73biz/site-ux-analyzer/blob/master/LICENSE
 * @copyright Copyright (c) 2014, t73biz 
 */

namespace t73biz\SiteUxAnalyzer;

require(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php');

/**
 * The SiteUxAnalyzer class
 * @author t73biz <https://github.com/t73biz>
 * @since 0.1.0
 */
class SiteUxAnalyzer {

	/**
	 * A sample parameter
	 * @var int $myParam This is my parameter
	 * @since 0.1.0
	 */
	public $myParam = 0;

	/**
	 * A sample function that adds the $n param to $myParam
	 * @name increase
	 * @param int $n The number to add to $myParam
	 * @since 0.1.0
	 * @return object the SiteUxAnalyzer object
	 */
	public function increase ( $n ) {
		$this->myParam += $n;
		return $this;
	}

	/**
	 * A sample function that sets $myParam to 0
	 * @name negate
	 * @since 0.1.0
	 * @return object the SiteUxAnalyzer object
	 */
	public function negate (){
		$this->myParam = 0;
		return $this;
	}
}

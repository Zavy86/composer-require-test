<?php
/**
 * Hellooo
 *
 * @package Zavy86\ComposerRequireTest\
 * @author Manuel Zavatta <manuel.zavatta@gmail.com>
 */

namespace Zavy86\ComposerRequireTest;

use \Zavy86\ComposerPackageTest\Hello;

class Hellooo extends Hello{
	/**
	 * Say hello to ...
	 *
	 * @param string $name
	 * @return string
	 */
	public static function to(string $name):string{
		return parent::to($name).'!!';
	}
}

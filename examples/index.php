<?php
/**
 * Examples - Index
 *
 * @package Zavy86\ComposerRequireTest\Examples
 * @author Manuel Zavatta <manuel.zavatta@gmail.com>
 */

require_once __DIR__.'/../vendor/autoload.php';

use Zavy86\ComposerRequireTest\Hellooo;

$name=$_GET['name']??'Zavy86';

echo Hellooo::to($name);

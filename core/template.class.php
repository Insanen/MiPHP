<?php

Class Template {
private $registry;

private $vars = array();

/*
 * @constructor
 * @access public
 * @return void
 */
function __construct($registry) {
	$this->registry = $registry;

}

 /*
 * @set undefined vars
 * @param string $index
 * @param mixed $value
 * @return void
 */
 public function __set($index, $value)
 {
        $this->vars[$index] = $value;
 }


function show($name) {
	$path = __SITE_PATH . '/views' . '/' . $name . '.php';

	if (file_exists($path) == false)
	{
		throw new Exception('Template not found in '. $path);
		return false;
	}

	foreach ($this->vars as $key => $value)
	{
		$$key = $value;
	}

	include ($path);
}
}

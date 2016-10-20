<?php

/*
    Name: MiPHP
    Description:
    Version: 1.0.2
*/

/**
 *  @version	1.0.2
 */

Class Registry {
 private $vars = array();
 public function __set($index, $value)
 {
	$this->vars[$index] = $value;
 }

 public function __get($index)
 {
	return $this->vars[$index];
 }
}

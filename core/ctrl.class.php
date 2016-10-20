<?php

/*
    Name: MiPHP
    Description:
    Version: 1.0.2
*/

/**
 *  @version	1.0.2
 */

Abstract Class baseController {
	protected $registry;
	function __construct($registry) {
		$this->registry = $registry;
	}
	abstract function index();
}

?>

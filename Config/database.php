<?php
class DATABASE_CONFIG {
public function __construct() {
	        $this->test = Configure::read('database.test');
	        $this->default = Configure::read('database.default');
	}
	}
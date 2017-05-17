<?php

require_once __DIR__.'/ControllerInterface.php';

class TestService {
	/**
	 * @var ControllerInterface
	 */
	private $controller;
	
	public function __construct(ControllerInterface $controller) {
		$this->controller = $controller;
	}
	
	public function asyncTest($outputDirectly, $outputToFile) {
		$this->controller->sendResponse($outputDirectly);
		
		sleep(5);
		
		file_put_contents('testFile.txt', $outputToFile);
	}
}
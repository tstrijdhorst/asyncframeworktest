<?php

require_once __DIR__.'/ControllerInterface.php';
require_once __DIR__.'/ApplicationServiceInterface.php';

/**
 * @inheritdoc
 */
class TestService implements ApplicationServiceInterface {
	/**
	 * @var ControllerInterface
	 */
	private $controller;
	
	/**
	 * @param ControllerInterface $controller
	 */
	public function __construct(ControllerInterface $controller) {
		$this->controller = $controller;
	}
	
	/**
	 * @param string $outputDirectly
	 * @param string $outputToFile
	 */
	public function asyncTest($outputDirectly, $outputToFile) {
		$this->controller->sendResponse($outputDirectly);
		
		sleep(5);
		
		file_put_contents('testFile.txt', $outputToFile);
	}
}
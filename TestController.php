<?php

require_once __DIR__.'/ControllerInterface.php';
require_once __DIR__.'/TestService.php';

class TestController implements ControllerInterface {
	/** @var  TestService */
	private $testService;
	
	public function __construct() {
		$this->testService = new TestService($this);
	}
	
	public function sendResponse($output) {
		echo $output;
	}
	
	public function executeRequest(array $input) {
		$this->testService->asyncTest('This is directly printed', 'This dude is printed to file after waiting 5 seconds');
	}
}
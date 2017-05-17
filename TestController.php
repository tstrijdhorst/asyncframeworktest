<?php

require_once __DIR__.'/ControllerInterface.php';
require_once __DIR__.'/TestService.php';

class TestController implements ControllerInterface {
	public function sendResponse($output) {
		echo $output;
	}
	
	public function executeRequest(array $input) {
		$service = new TestService($this);
		$service->asyncTest('This is directly printed', 'This dude is printed to file after waiting 5 seconds');
	}
}
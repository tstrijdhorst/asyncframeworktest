<?php

require_once __DIR__.'/ControllerInterface.php';
require_once __DIR__.'/TestService.php';

/**
 * @inheritdoc
 */
class TestController implements ControllerInterface {
	/** @var  TestService */
	private $testService;
	
	public function __construct() {
		$this->testService = new TestService($this);
	}
	
	/**
	 * @param $output
	 */
	public function sendResponse($output) {
		echo $output;
	}
	
	/**
	 * @param array $input
	 */
	public function executeRequest(array $input) {
		$this->testService->asyncTest(
			'This is directly printed',
			'This dude is printed to file after sleeping 5 seconds'
		);
	}
}
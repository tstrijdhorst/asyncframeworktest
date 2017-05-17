<?php

interface ControllerInterface {
	public function sendResponse($output);
	public function executeRequest(array $input);
}
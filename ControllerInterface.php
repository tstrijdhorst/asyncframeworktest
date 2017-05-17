<?php

interface ControllerInterface {
	public function sendResponse($output);
	public function execute(array $input);
}
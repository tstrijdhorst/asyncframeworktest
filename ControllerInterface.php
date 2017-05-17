<?php

/**
 * This controller serves as an entrypoint for a usecase.
 * It's only function is to translate the request of protocol X to input for our applicationservice
 * and inversely translate the response of our applicationservice to protocol X.
 */
interface ControllerInterface {
	public function sendResponse($output);
	public function executeRequest(array $input);
}
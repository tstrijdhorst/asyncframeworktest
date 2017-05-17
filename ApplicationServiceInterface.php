<?php

/**
 * This applicationservice provides different usecases within this (sub)domain as public functions.
 * Each usecase takes in unvalidated scalar input and will use this input to orchestrate the requested
 * usecase with the help of domain models/services.
 *
 * It requires a controllerinterface to be injected so we can respond as early as possible without ending the request execution.
 * This allows for async execution without the need for job scheduling or creating new processes.
 */
interface ApplicationServiceInterface {
	public function __construct(ControllerInterface $controller);
}
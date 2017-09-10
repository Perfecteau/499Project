<?php

class Vehicle extends Controller
{

	public function index($company = '', $model='')
	{	
		//set vehicle model
		$vehicle = $this->loadModel('Vehicle');

		$vehicle->company = $company;
		$vehicle->model = $model;

		$this->loadView('vehicle/index', ['company' => $vehicle->company, 'model' => $vehicle->model ]);
	}
}
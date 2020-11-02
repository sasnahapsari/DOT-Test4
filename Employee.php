<?php

/**
 * 
 */
class Employee
{
	
	private $name;
	private $title;
	private $salary;

	public function setEmployeeName($name) { $this->name = $name;}

	public function getEmployeeTitle() { return $this->title; }

	public function getEmployeeProfile() { 
		$data = [
			'name' => $this->name,
			'title' => $this->title,
			'salary' => $this->salary
		];
		return $data; 
	}

	public function getEmployeeMonthlySalary($day) { return $this->salary * $day; }
}

?>
<?php

class Project {
	
	private $name;
	private $tasks;
	
	public function __construct($name) {
		$this->name = $name;
		$this->tasks = [];
	}
	
	public function __desctruct(){
		echo 'Проект завершён';
	}
	
	public function addTask($task) {
		$this->tasks[] = $task;
	}
	
	public function __toString() {
		return "Проект: $this->name\nКоличество задач: " . count($this->tasks);
	}
}

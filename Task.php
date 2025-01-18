<?php

class Task {
	
	private $title;
	private $description;
	private $status;
	
	public function __construct($title, $description){
		$this->title = $title;
		$this->description = $description;
		$this->status = 'Не выполнено';
	}
	
	public function __desctruct(){
		echo "Задача удалена из памяти";
	}
	
	public function __call($method, $arguments){

	}
	
    public function __toString() {
        return "Задача: {$this->title} — {$this->status}";
    }
	
}
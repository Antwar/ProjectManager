<?php 

include 'Task.php';
include 'Project.php';

$task = new Task("Провести проверку", "проверить работоспособность кода");
echo $task;

$project = new Project('Производство ткани');
$project->addTask("Произвести партию шёлка");
$project->addTask("Произвести партию хлопка");
$project->addTask("Произвести партию льна");
echo $project;
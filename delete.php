<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$taskId = $_POST['task_id'];
		
		$tasks = file('tasks.txt');
		
		if(isset($tasks[$taskId])){
			unset($tasks[$taskId]);
			
			file_put_contents('tasks.txt',implode("\n",$tasks));
			
			header('Location: index.html');
			exit;
		}
	}
?>
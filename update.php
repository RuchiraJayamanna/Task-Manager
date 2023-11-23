<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$taskId = $_POST['task_id']; //TaskId is Starting with 0
		$newUsername = $_POST['new_username'];
		$newTitle = $_POST['new_title'];
		$newDescription = $_POST['new_description'];
		$newDate = $_POST['new_date'];
		
		$tasks = file('tasks.txt');
		
		if(isset($tasks[$taskId])){
			$taskParts = explode('|',$tasks[$taskId]);
			$taskPart[0] = $newUsername;
			$taskPart[1] = $newTitle;
			$taskPart[2] = $newDescription;
			$taskPart[3] = $newDate;
			
			$updatedTask = implode('|',$taskParts);
			$tasks[$taskId]=$updatedTask;
			
			file_put_contents('tasks.txt',implode("\n",$tasks));
			
			header('Location: index.html');
			exit;
		}
	}
?>
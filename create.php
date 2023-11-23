<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$username = $_POST['username'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$date = $_POST['date'];
		
		$task = "$username|$title|$description|$date\n";
		file_put_contents('tasks.txt',$task,FILE_APPEND); //storing tasks in the tasks.txt file
		
		header('Location: index.html');
		exit;
	}
?>
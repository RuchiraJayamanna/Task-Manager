<?php
	$tasks = file('tasks.txt',FILE_IGNORE_NEW_LINES);
	if(empty($tasks)){
		echo "Tasks List is Empty.";
	}
	else{
		echo "<ul>";
		foreach ($tasks as $task){
			list($username,$title,$description,$date) = explode('|',$task);
			echo "<li>";
			echo "Username - $username <br>";
			echo "Task Title - $title <br>";
			echo "Task Description - $description <br>";
			echo "Date - $date <br>";
			echo "</li>";
		}
		echo "</ul>"
	}
?>


<?php
class TaskService {
    
    public static function listTasks() {
        $db = ConnectionFactory::getDB();
        $tasks = array();
        
        foreach($db->tasks() as $task) {
           $tasks[] = array (
               'id' => $task['id'],
               'description' => $task['description'],
               'done' => $task['done']
           ); 
        }
        
        return $tasks;
    }
}
?>
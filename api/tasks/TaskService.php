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
    
    public static function getById($id) {
        $db = ConnectionFactory::getDB();
        return $db->tasks[$id];
    }
    
    public static function add($newTask) {
        $task = $db->tasks->insert($newTask);
        return $tasks;
    }
}
?>
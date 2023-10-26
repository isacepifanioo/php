<?php

class Task {
    
    public $title;
    public $description;
    public $completed = false;
    
    public function __construct($title, $description) {

        $this->title = $title;
        $this->description = $description;

    }

    public function markAsCompleted() {
        
        $this->completed = true;
        
        if ($this->completed) {
            echo "A tarefa foi concluida <br>";
        }
        
    }
    
    public function markAsIncomplete() {
        
        $this->completed = false;
        
        if ($this->completed == false) {
            echo "A tarefa não foi concluida <br>";
        }
        
    }
    
    public function getTitle() {
        
        return $this->title;
        
    }
    
    public function getDescription() {
        
        return $this->description;
        
    }
    
    function isCompleted() {
        return $this->completed;
    }
    
}

$task1 = new Task("trabalho", "deixa os menino no reforço");

echo $task1->markAsIncomplete();
echo $task1->getTitle() . "<br>";
echo $task1->getDescription(). "<br>";
echo $task1->isCompleted(). "<br>";


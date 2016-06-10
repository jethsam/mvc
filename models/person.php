<?php

require_once '../model.php';

class Person extends Model {
    
    protected function initializeFields() {
        $this->fields = [
            'name' => 'Unknown', 
            'skill' => 'Unknown', 
        ];
    }
}
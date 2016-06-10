<?php

/**
 * A model represents an object in our application that we manipulate. 
 * Most of (if not all) the time, an instance of a model represents an entry to 
 * a persistent storage (e.g. a row in a database)
 */
abstract class Model {
    
    /**
     *
     * @var array An associative array which represents the fields of an 
     * instance 
     */
    protected $fields;
    
    function __construct() {
        $this->initializeFields();
    }
    
    /**
     * Get the value of a field
     * 
     * @param string $name
     * @return mixed Value of the field
     * @throws Exception
     */
    public function getField($name) {
        if (!array_key_exists($name, $this->fields)) {
            throw new Exception("Field [{$name}] does not exist.");
        }
        return $this->fields[$name];
    }
    
    /**
     * 
     * @param string $name
     * @param mixed $value
     * @throws Exception 
     */
    public function setField($name, $value) {
        $this->getField($name); # this line makes sure that the field name is valid
        $this->fields[$name] = $value;
    }
    
    /**
     * Declaration of a model's available fields and probably their initial 
     * values
     */
    abstract protected function initializeFields();
}
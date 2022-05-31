<?php

// namespace App\Models;

// use \App\Models\ResourceModel;   


Class Student extends ResourceModel {
	public $table = 'student';
	public $primaryKey = 'roll_no';
	public $connection = false;
    public $mongo = '';
    public $data = [];

	public function __construct($connection){
		$this->connection = $connection;
        /* $mongoObj = new \MongoDb\Client("mongodb://mongo", array("username" => 'root', "password" => "password123"));
        $this->mongo = $mongoObj; */
	}

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}
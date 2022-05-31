<?php

// namespace App\Models;

use Phalcon\Di\Injectable;


Class ResourceModel extends Injectable {
	public $primaryKey = 'id';
	public $connection = false;
	public $table = 'student';

	public function load($value){

	}

	public function save(){
		// var_dump($this->table);
		// die;
		$collection = $this->table;
		$this->connection->$collection->insertOne($this->data);

	}

	public function delete(){
		$this->connection->deleteOne(['_id' => $this->_id ]);

	}

	public function update(){
		$data = [
			'roll_no' => $this->roll_no,
			'name' => $this->roll_no,
			'address' => $this->roll_no
		];
		$this->connection->table->updateOne(['_id' => $this->_id ],['$set' => $data],['upsert'=>true]);
		
	}


	// create required magic methods for achieving required features.
}
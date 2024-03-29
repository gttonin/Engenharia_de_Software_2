<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

    abstract public function insert();
	abstract public function update($id);

    abstract public function find($id);

    public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		try {
			$stmt->execute();
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
}

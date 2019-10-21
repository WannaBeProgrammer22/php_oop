<?php 

  class Database{
    // define properties
    public $dbConnection;
    public $records;

    // define methods
    public function openConnection(){}

    public function fetchRecord($id){}

    public function insertRecord($data){}

    public function updateRecord($id, $data){}

    public function deleteRecord($id){}
  }


?>
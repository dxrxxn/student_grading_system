<?php

namespace Agraviador\Gs\Models;

use Agraviador\Gs\Core\Crud;
use Agraviador\Gs\Core\Database;

class StudentModel extends Database implements Crud{

    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;
    
    public function __construct()
    {
      parent::__construct();
      $this->id = 0;
      $this->name  = "";
      $this->course  = "";
      $this->year_level = 0;
      $this->section =  "";
    }

    public function create() {
      $query = $this->conn->prepare("INSERT INTO `students` (`id`, `name`, `course`, `year_level`, `section`)
      VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
      if($query->execute()){
        echo "Student Inserted!!";
      }
        

    }
    public function read() {
      try {
        $sql = "SELECT * FROM students";
        $results = $this->conn->query($sql);
        return $results->fetch_all(MYSQLI_ASSOC);
      } catch (\Throwable $th) {
        echo $th->getMessage();

      }

    }
    public function update($id) {
      $this->id = $id;
      $query = $this->conn->prepare 
      ("UPDATE `students` SET `Name`='$this->name',`course`='$this->course',`year_level`='$this->year_level',`section`='$this->section' WHERE `id` = $this->id");
      if($query->execute()){
        echo "Student Update Succesfully!!\n";
      } 
    }
    public function delete($id) {
      $this->id=$id;

      $sql = "DELETE FROM `students` WHERE ID = $this->id"; 
      if ($this->conn->query($sql)){
        echo "Student Deleted!!";
      } else {
        echo "failed". $this->conn->error;
      }

        
    }
}


?>
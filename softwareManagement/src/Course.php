<?php

namespace CourseApp;
use PDO;

class Course
{
    public $data = '';
    public $conn = '';

    public function __construct()
    {
        session_start();
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=lab", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

    //show all data
    public function index()
    {
        try {
            $query = "SELECT * FROM `labinfo` ";
            $q = $this->conn->query($query);
            while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                $this->data[] = $row;
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        return $this->data;
        return $this;
    }
}
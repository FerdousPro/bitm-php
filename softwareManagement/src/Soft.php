<?php

namespace App;
use PDO;

class Soft
{
    public $lab = '';
    public $title = '';
    public $version = '';
    public $type = '';
    public $id = '';
    public $data='';

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
    public function prepare($data = ''){
        if (!empty($data['lab'])) {
            $this->lab = $data['lab'];
        }else{
            $_SESSION['labEmpty'] = '<h6 style="color: red">Lab number Required!</h6>';
        }
        if (!empty($data['title'])) {
            $this->title = $data['title'];
        }else{
            $_SESSION['titleEmpty'] = '<h6 style="color: red">Software Name Required!</h6>';
        }
        if (!empty($data['version'])) {
            $this->version = $data['version'];
        }else{
            $_SESSION['verEmpty'] = '<h6 style="color: red">Software Version Required!</h6>';
        }
        if (!empty($data['type'])) {
            $this->type = $data['type'];
        }else{
            $_SESSION['typeEmpty'] = '<h6 style="color: red">Software type Required!</h6>';
        }
        if (!empty($data['id'])) {
            $this->id = $data['id'];
        }
        $_SESSION['formData'] = $_POST;
        return $this;
    }

    public function store(){
        if (!empty($this->lab) && !empty($this->title) && !empty($this->version) && !empty($this->type)){
            try {
                $query = "INSERT INTO installed_softwares (id, labinfo_id, software_title, version, software_type, created, updated, deleted) 
                          VALUES (:id, :lid, :title, :ver, :soft_type, :created, :updated, :deleted )";
                $stmt = $this->conn->prepare($query);
                $stmt->execute(array(
                    ":id"=> '',
                    ":lid"=> $this->lab,
                    ":title"=>$this->title,
                    ":ver"=>$this->version,
                    ":soft_type" => $this->type,
                    ":created" => date('y-m-d h-m-s'),
                    ":updated" => '',
                    ":deleted" => ''
                ));
                $_SESSION['msg'] = ' <h5 style="color:green;">Software Successfully Added!</h5> ';
                unset($_SESSION['formData']);
                header('location: add.php');
            } catch (\PDOException $e) {
                echo 'Error:' . $e->getMessage();
            }
        }else{
            header('location: add.php');
        }
    }
    //show all data
    public function show(){
        $query = "SELECT * FROM `installed_softwares` WHERE is_delete = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $rows; //one array/row should be in a multidimensional array
        }
        return $this->data;
    }
    //single view
    public function view(){
        $query = "SELECT * FROM `installed_softwares` WHERE id=". "'" . $this->id. "'"; //i have problem here
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    //update single data
    public function update(){
        try {
            $query = "UPDATE installed_softwares SET labinfo_id = :lid, software_title = :title, version = :ver, software_type = :soft_type,
                      created = :created, updated = :updated, deleted = :deleted WHERE id =" . $this->id;
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':lid'  => $this->lab,
                ':title'  => $this->title,
                ':ver' => $this->version,
                ':soft_type' => $this->type,
                ':created' => '',
                ':updated' => date('y-m-d h-m-s'),
                ':deleted' => ''
            ));
//            $_SESSION['msg'] = 'Data Successfully updated';
            $_SESSION['msg'] = ' <h5 style="color:green;">Software Successfully Updated!</h5> ';
            header('location: show.php');
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    //delete Single data
    public function delete(){
        try {
            $stmt = $this->conn->prepare('DELETE FROM installed_softwares WHERE id = :id');
            $stmt->bindParam(':id', $this->id); // this time, we'll use the bindParam method
            $stmt->execute();
            $_SESSION['msg'] = 'Data Successfully deleted';
            header('location: show.php');
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    //Soft Delete
    public function trash(){
        try {
            $query = "SELECT * FROM installed_softwares WHERE id=". $this->id;
            $STH = $this->conn->prepare($query);
            $STH->execute();
            $user = $STH->fetch(PDO::FETCH_ASSOC);
//            print_r($user);
//            die();
            if ($user['is_delete'] == 0){
                $qr = "UPDATE installed_softwares SET is_delete = 1 WHERE id=" . $this->id;
                $STH = $this->conn->prepare($qr);
                if ($STH->execute()){
                    $_SESSION['msg'] = ' <h5 style="color:red;">Software Successfully Deleted!</h5> ';
//                    $_SESSION['msg'] = 'Software successfully deleted';
                    header('location:show.php');
                }
            }

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
    //Deleted items
    public function trashlist(){
        $query = "SELECT * FROM `installed_softwares` WHERE is_delete = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $rows; //one array/row should be in a multidimensional array
        }
        return $this->data;
    }
    //Lab search
    public function searchlab($search = "")
    {
        if (!empty($search['lab_search'])) {
            $keyword = $search['lab_search'];
            $keyword = preg_replace("#[^0-9a-z]#i", "", $keyword);
            $sql = "SELECT * FROM `installed_softwares` WHERE `labinfo_id` LIKE :keyword;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':keyword', '%' . $keyword . '%');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
//                    echo"<pre>".print_r($result,true)."</pre>";
                    $this->data[] = $result;
//                    header('location:../index.php');
                }
            } else {
                $_SESSION['msg'] = 'There was nothing to show. Please search with right keyword.';
            }

        } else {
            $_SESSION['msg'] = 'Please insert something.';
        }
        return $this->data;
    }
    //Software search
    public function searchSoft($search = "")
    {
        if (!empty($search['soft_search'])) {
            $keyword = $search['soft_search'];
            $keyword = preg_replace("#[^0-9a-z]#i", "", $keyword);
            $sql = "SELECT * FROM `installed_softwares` WHERE `software_title` LIKE :keyword;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':keyword', '%' . $keyword . '%');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
//                    echo"<pre>".print_r($result,true)."</pre>";
                    $this->data[] = $result;
                }
            } else {
                $_SESSION['msg'] = 'There was nothing to show. Please search with right keyword.';
            }

        } /*else {
            $_SESSION['msg'] = 'Please insert something.';
        }*/
        return $this->data;
    }
    // Restore
    public function restore(){
        try {
            $query = "SELECT * FROM installed_softwares WHERE id=". $this->id;
            $STH = $this->conn->prepare($query);
            $STH->execute();
            $user = $STH->fetch(PDO::FETCH_ASSOC);
//            print_r($user);
//            die();
            if ($user['is_delete'] == 1){
                $qr = "UPDATE installed_softwares SET is_delete = 0 WHERE id=" . $this->id;
                $STH = $this->conn->prepare($qr);
                if ($STH->execute()){
                    $_SESSION['msg'] = '<h5 style="color:green;">Software Successfully Restored!</h5>';
                    header('location:trash_list.php');
                }
            }

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    //show all data from Labinfo Table
    public function index()
    {
        $query = "SELECT * FROM `labinfo`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $this->data[] = $rows; //one array/row should be in a multidimensional array
        }
        return $this->data;
    }

}
<?php

Class Model{
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'aurora';
    private $conn;

    public function __construct()
    {
        try
        {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e)
        {
            echo "connection failed: " . $e->getMessage();
        }
    }

    public function create(){
        if(isset($_POST['submit'])){
            if (isset($_POST['title']) &&  isset($_POST['descr'])   &&  isset($_POST['status'])  ){
                if(!empty($_POST['title']) &&  !empty($_POST['descr'])){
                //load variables from submit
                $title = $_POST['title'];
                $descr = $_POST['descr'];
                $status = $_POST['status'];
                //prepare query
                $query = "INSERT INTO articles (title, descr,status) VALUES ('$title', '$descr', '$status')";
                if($sql = $this->conn->query($query)) {
                    echo "<p class = 'text-info'>Article created</p>";
                } else {
                    echo "<p class = 'text-danger'>Article has not been created !</p>";
                }
                   return;
                }
            }
            echo "<p class = 'text-danger'>Check your credentials!</p>";
            return;
        }
    }
    
    public function fetch(){
        $data = null;
        $query = "SELECT * FROM articles";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id){
        $query = "DELETE FROM articles where id = '$id'";
        return ($sql = $this->conn->query($query)) ?  true : false;
    }

}
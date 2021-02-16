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
            var_dump($_POST);
            if (isset($_POST['title']) &&  isset($_POST['descr'])   &&  isset($_POST['status'])  ){
                if(!empty($_POST['title']) &&  !empty($_POST['descr'])){
                   echo "yes";
                   return;
                }
            }
            echo "no";
            return;
        }
    }

}
<?php

class createdb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $tablename2;
    public $tablename3;
    public $conn;

    public function __construct(
        $dbname="shoppingCart",
        $tablename="productdb",
        $tablename2="cart",
        $tablename3="users",
        $servername="localhost",
        $username="root",
        $password=""
        )
    {
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;
        $this->dbname=$dbname;
        $this->tablename=$tablename;
        $this->tablename2=$tablename2;
        $this->tablename3=$tablename3;

        //connect to localhost via username and password first
        $this->conn=mysqli_connect($servername, $username, $password);

        //check if connection to localhost
        if(!$this->conn){
            die("connection failed:".mysqli_connect_error());
        }

        //create database
        $sql="CREATE DATABASE IF NOT EXISTS $dbname";

        //execute creation of database via query and connect from localhost into database 
        if(mysqli_query($this->conn, $sql))
        {
            $this->conn= mysqli_connect($servername, $username, $password, $dbname);
        
            //create table after connecting to database
            $sql="CREATE TABLE IF NOT EXISTS $this->tablename
            (
                p_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(100),
                category VARCHAR(100),
                brand VARCHAR(100),
                description VARCHAR(100),
                keyword VARCHAR(100)
            )";
            //execute sql for table creation and check if not succesful else return false to error message
            if(!mysqli_query($this->conn, $sql)){
                echo "Error creating table:". mysqli_error($this->conn);
            }else {
                    $sql="CREATE TABLE IF NOT EXISTS $this->tablename2
                (
                    c_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    u_id INT(11) NOT NULL,
                    p_id INT(11) NOT NULL,
                    p_name VARCHAR(25) NOT NULL,
                    p_price FLOAT
                )";
                if(!mysqli_query($this->conn, $sql)){
                    echo "Error creating table:". mysqli_error($this->conn);
                }else {
                        $sql="CREATE TABLE IF NOT EXISTS $this->tablename3
                    (
                        u_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        f_name VARCHAR(25) NOT NULL,
                        l_name VARCHAR(25) NOT NULL,
                        email VARCHAR(25) NOT NULL,
                        password VARCHAR(25) NOT NULL,
                        phone_no VARCHAR(25) NOT NULL,
                        address VARCHAR(25) NOT NULL
                    )";
                    if(!mysqli_query($this->conn, $sql)){
                        echo "Error creating table:". mysqli_error($this->conn);
                    }else {
                        return false;
                    }
                }
            }
        }
    }
    
}
?>

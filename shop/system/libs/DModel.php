<?php
    class DModel{
    protected $db =array();
    public function __construct(){
        $connect ='mysql:host=localhost;dbname=shop;';
        $user='root';
        $pass='';

        $this->db = new Database($connect,$user,  $pass);
       
        
    }
    
}




?>
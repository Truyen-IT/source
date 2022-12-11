<?php
class category extends DController{//ten file trung voi ten class
    public function __construct(){
       $data = array();
       parent::__construct();
    
    }
    public function list_category(){
        $this->load->view('header');
        $categorymodel=$this->load->model('categorymodel');
        $table_category_product='tbl_category_product';
        $data['category']=$categorymodel->category( $table_category_product);//goi category ben  model   
        $this->load->view('category',$data);
        $this->load->view('footer');
    }
    
    
    public function catebyid(){
        $this->load->view('header');
        $categorymodel=$this->load->model('categorymodel');
        $id=2;
        $table_category_product='tbl_category_product';
        $data['categorybyid']=$categorymodel->categorybyid( $table_category_product,$id);//goi category ben  model   
        $this->load->view('categorybyid',$data);
       
        $this->load->view('footer');
    }
    public function addcategory(){
        $this->load->view('addcategory');

    }
   public function insertcategory(){
    $categorymodel=$this->load->model('categorymodel');
    $table_category_product='tbl_category_product';
    
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    $data =array(
        'title_category_product'=> $title,
        'desc_category_product'=> $desc
    );

     echo $result=$categorymodel->insertcategory( $table_category_product,$data);//goi category ben  model  
    
   }

   public function updatecategory(){
    $categorymodel=$this->load->model('categorymodel');
    $table_category_product='tbl_category_product';

    $id=2;
    $cond="tbl_category_product.id_category_product='$id'";

    $data =array(
        'title_category_product'=> 'mabook',
        'desc_category_product'=> 'banh dfvudfhvudhmi'
    );

    $result=$categorymodel->updatecategory($table_category_product,$data,$cond);//goi category ben  model  
    
   }
   public function deletecategory(){
    $categorymodel=$this->load->model('categorymodel');
    $table_category_product='tbl_category_product';

    $id=5;
    $cond="tbl_category_product.id_category_product='$id'";

    $result=$categorymodel->deletecategory($table_category_product,$cond);//goi category ben  model  
    
   }


  
   
    
        
    }


?>
<?php
class index extends DController{//ten file trung voi ten class
    public function __construct(){
       $data = array();
       parent::__construct();
    
    }
    public function index(){
        return $this->homepage();//chay cai ben duoi
    }
    public function homepage(){//chay ra giao dien la cai nay ne
        $table ='tbl_category_product';
        $table_product ='tbl_product';
        $post ='tbl_post';
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $table_post='tbl_category_post';
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $data['product_home']=$categorymodel->list_product_index($table_product);
        $data['post_index']=$categorymodel->post_index($post);
       
        $this->load->view('header',$data);
        $this->load->view('slider',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');//giao dien footer
    }
    public function lienhe(){
        $table='tbl_category_product';
        $table_post='tbl_category_post';
       
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $data['category']=$categorymodel->categorypost_home($table_post);
        $this->load->view('header',$data);
      //  $this->load->view('slider');
        $this->load->view('contact');
       
        $this->load->view('footer');//giao dien footer

        
    }
   
    public function notfound(){
        $table ='tbl_category_product';
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $table_post='tbl_category_post';
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $this->load->view('header',$data);
        $this->load->view('404');
        $this->load->view('footer');
    }
    
           
    
    public function timkiem(){
        $title=$_POST['key'];
        $table ='tbl_category_product';
        $table_product ='tbl_product';
        $post ='tbl_post';
       
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $table_post='tbl_category_post';
        $data['list_timkiem']=$categorymodel->timkiem($table_product,$title);
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $data['product_home']=$categorymodel->list_product_index($table_product);
        $data['post_index']=$categorymodel->post_index($post);
       
        $this->load->view('header',$data);
       $this->load->view('slider',$data);
       $this->load->view('timkiem',$data);
       $this->load->view('footer');//giao dien footer

       
      

    }
}

?>
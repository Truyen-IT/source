<?php
class tintuc extends DController{//ten file trung voi ten class
    public function __construct(){
       $data = array();
       parent::__construct();
    
    }
    public function index(){
        $this->danhmuc();
    }
    public function tatca()
    {
        $table ='tbl_category_product';
        $table_post ='tbl_category_post';
        $post='tbl_post';

        $categorymodel=$this->load->model('categorymodel');
        $postmodel=$this->load->model('postmodel');
        $data['category']=$categorymodel->category_home($table);
      
        $data['category_post']=$categorymodel->categorypost_home($table_post);
       
        $data['list_post']=$postmodel->list_post_home($post);
        $this->load->view('header',$data);
        //$this->load->view('slider');
        $this->load->view('list_post',$data);
       
        $this->load->view('footer');//giao dien footer
    }
    public function danhmuc($id){
        $table ='tbl_category_product';
        $table_post ='tbl_category_post';
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $post='tbl_post';
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $data['postbyid']=$categorymodel->postbyid_home(  $table_post, $post,$id);
        $this->load->view('header',$data);
        //$this->load->view('slider');
        $this->load->view('categorypost',$data);
       
        $this->load->view('footer');//giao dien footer
    }
    public function chitiettin($id){
        $table ='tbl_category_product';
        $table_post ='tbl_category_post';
        $categorymodel=$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_home($table);
        $post='tbl_post';
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $data['postbyid']=$categorymodel->postbyid_homemodel($post,$id);
        $this->load->view('header',$data);
        //$this->load->view('slider');
        $this->load->view('chitiettin',$data);
       
        $this->load->view('footer');//giao dien footer
    }
    
   
           
    }


?>
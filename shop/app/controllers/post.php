<?php
class post extends DController{
    public function __construct(){
        parent::__construct();
    
    }
    public function index(){
        $this->add_category();
       
    }
    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/post/add_category');//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function insert_category(){
        $title=$_POST['title_category_post'];
        $desc=$_POST['desc_category_post'];
        $table="tbl_category_post";
        $data = array(
            'title_category_post'=>$title,
            'desc_category_post'=>$desc
        );
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->insertcategory_post($table,$data);
        if($result==1){
            header('Location:'.BASE_URL."/post/list_category");
        }else{
            header('Location:'.BASE_URL."/post/list_category");
    }
    
        
    }
    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        
        $table="tbl_category_post";
        $categorymodel =$this->load->model('categorymodel');
        $data['category']=$categorymodel->category_post($table);

        $this->load->view('cpanel/post/list_category',$data);//chay vo file cpaner /product/add_product
        $this->load->view('cpanel/footer');

    }
    public function delete_category($id){//ham o day ne
        $table="tbl_category_post";
        $cond="id_category_post='$id'";
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->deletecategory_post($table,$cond);
        header('Location:'.BASE_URL."/post/list_category");

    }
    public function edit_category($id){
        $table="tbl_category_post";
        $cond="id_category_post='$id'";
        $categorymodel =$this->load->model('categorymodel');
        $data['categorybyid']=$categorymodel->categorybyid_post($table,$cond);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/post/edit_category',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    
    public function updatepost($id){
        $table="tbl_category_post";
        $cond="id_category_post='$id'";
        $title=$_POST['title_category_post'];
        $desc=$_POST['desc_category_post'];
        $data = array(
            'title_category_post'=>$title,
            'desc_category_post'=>$desc
        );
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->updatecategory_post($table,$data,$cond);
        header('Location:'.BASE_URL."/post/list_category");
        

    }
    public function add_post(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $postmodel =$this->load->model('postmodel');
        $table="tbl_category_post";
        $data['category']=$postmodel->category_post($table);

        $this->load->view('cpanel/post/add_post',$data);//chay vo file cpaner /product/add_category co du lieu
        $this->load->view('cpanel/footer');

    }
    public function insert_post(){
        $title=$_POST['title_post'];//cac truong
        $content=$_POST['content_post'];
       
        
        $image=$_FILES['image_post']['name'];
       $tmp_image=$_FILES['image_post']['tmp_name'];
        
        $div = explode('.',$image);
        $file_ext =strtolower(end($div));
        $unique_image=$div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/post/".$unique_image;


        $category=$_POST['category_post'];
        $table="tbl_post";//ten bang
        $data = array(
            'title_post'=>$title,
            'content_post'=>$content,
            'image_post'=>$unique_image,
            'id_category_post'=>$category
        );
        $postmodel =$this->load->model('postmodel');
        $result=$postmodel->insertpost($table,$data);
        if($result==1){
            move_uploaded_file( $tmp_image,$path_uploads);
            header('Location:'.BASE_URL."/post/list_post");
        }else{
            header('Location:'.BASE_URL."/post/list_post");
    }
    
        
    }
    public function list_post(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        
        $table_post="tbl_post";
        $table_category="tbl_category_post";
        $postmodel =$this->load->model('postmodel');//thay doi qua postmodel
        $data['post']=$postmodel->post($table_post,$table_category);

        $this->load->view('cpanel/post/list_post',$data);//chay vo file cpaner /product/add_product
        
        
        $this->load->view('cpanel/footer');

    }
    public function delete_post($id){//ham o day ne
        $table="tbl_post";
        $cond="id_post='$id'";
        $postmodel =$this->load->model('postmodel');
        $result=$postmodel->deletepost($table,$cond);
        header('Location:'.BASE_URL."/post/list_post");

    }
    public function edit_post($id){
        
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $cond="id_post='$id'";
        $postmodel =$this->load->model('postmodel');
        $table="tbl_category_post";
        $table_post="tbl_post";
       
        $data['category']=$postmodel->category_post($table);
        $data['postbyid']=$postmodel->postbyid($table_post,$cond);
       

        $this->load->view('cpanel/post/edit_post',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function update_post($id){
        $cond="id_post='$id'";
        $table="tbl_post";//ten bang
        $postmodel =$this->load->model('postmodel');
        
        $title=$_POST['title_post'];//cac truong
        $content=$_POST['content_post'];
        $category=$_POST['category_post'];
       
        
        $image=$_FILES['image_post']['name'];
        $tmp_image=$_FILES['image_post']['tmp_name'];
        
        $div = explode('.',$image);
        $file_ext =strtolower(end($div));
        $unique_image=$div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/post/".$unique_image;
     if($image){
            $data['postbyid']= $postmodel->postbyid($table,$cond);
           
            foreach($data['postbyid'] as $key =>$value){
                $path_unlink="public/uploads/post/";
               
                    unlink($path_unlink.$value['image_post']);

            }
          
            $data = array(
            'title_post'=>$title,
            'content_post'=>$content,
            'image_post'=>$unique_image,
            'id_category_post'=>$category
            );
            move_uploaded_file( $tmp_image,$path_uploads);

        }else{
            $data = array(
                'title_post'=>$title,
                'content_post'=>$content,
              //  'image_post'=>$unique_image,
                'id_category_post'=>$category
            );

        }

       
       
        $result=$postmodel->updatepost($table,$data,$cond);
        if($result==1){
          
            header('Location:'.BASE_URL."/post/list_post");
        }else{
            header('Location:'.BASE_URL."/post/list_post");
    }

    }
    
    
        
    }


?>
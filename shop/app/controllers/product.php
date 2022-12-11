<?php
class product extends DController{//ten file trung voi ten class
    public function __construct(){
       parent::__construct();
    
    }
    public function index(){
        $this->add_category();
       
    }
    public function insert_comment($id){
        $noidung=$_POST['comment'];
        $table="tbl_comment";
        $data = array(//cai mang /data la mang gom hai gia trij
            'text_comment'=> $noidung,
            'id_product'=> $id
        );
        $categorymodel =$this->load->model('categorymodel');//chay vo load
        $result=$categorymodel->insertcomment($table,$data);//ham
        if($result==1){
            header('Location:'.BASE_URL."/sanpham/chitietsanpham/$id");
        }else{
            header('Location:'.BASE_URL."/product");
    }
        
    }
    public function dangki(){
        $this->load->view('cpanel/dangki');

    }
    public function insert_taikhoan(){
        $title=$_POST['username'];//no gui post
        $desc=$_POST['password'];
        $table="tbl_admin";//ten bang du lieu
        $data = array(//cai mang /data la mang gom hai gia trij
            'username'=>$title,
            'password'=>$desc
        );
        $categorymodel =$this->load->model('loginmodel');//chay vo load
        $result=$categorymodel->inserttaikhoan($table,$data);//ham 
        if($result==1){
            header('Location:'.BASE_URL."/product/list_taikhoan");
        }else{
            header('Location:'.BASE_URL."/product");
    }

    }
    public function list_taikhoan(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        
        $table="tbl_admin";
        $categorymodel =$this->load->model('loginmodel');
        $data['category_taikhoan']=$categorymodel->category_taikhoan($table);
    
        $this->load->view('cpanel/product/list_taikhoan',$data);//chay vo file cpaner /product/add_product
        $this->load->view('cpanel/footer');
    
    }
    public function delete_taikhoan($id){//ham o day ne
        $table="tbl_admin";
        $cond="admin_id='$id'";
        $categorymodel =$this->load->model('loginmodel');
        $result=$categorymodel->deletecategory_taikhoan($table,$cond);
        header('Location:'.BASE_URL."/product/list_taikhoan");
    
    }
    public function edit_taikhoan($id){
        $table="tbl_admin";
        $cond="admin_id='$id'";
        $categorymodel =$this->load->model('loginmodel');
        $data['categorybyid']=$categorymodel->categorybyid_taikhoan($table,$cond);
    
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_taikhoan',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');
    
    }
    public function update_taikhoan($id){
        $table="tbl_admin";
        $cond="admin_id='$id'";
        $title1=$_POST['ten'];
        $desc1=$_POST['desc'];
        $data = array(
            'username'=>$title1,
            'password'=>$desc1
        );
        $categorymodel =$this->load->model('loginmodel');
        $result=$categorymodel->updatecategory_taikhoan($table,$data,$cond);
        header('Location:'.BASE_URL."/product/list_taikhoan");
        
    
    }
    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/add_category');//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function add_product(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $table="tbl_category_product";
        $categorymodel =$this->load->model('categorymodel');
        $data['category']=$categorymodel->category($table);

        $this->load->view('cpanel/product/add_product',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function insert_category(){
        $title=$_POST['title_category_product'];
        $desc=$_POST['desc_category_product'];
        $table="tbl_category_product";
        $data = array(
            'title_category_product'=>$title,
            'desc_category_product'=>$desc
        );
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->insertcategory($table,$data);
        if($result==1){
            header('Location:'.BASE_URL."/product/list_category");
        }else{
            header('Location:'.BASE_URL."/product");
    }
}
    public function insert_product(){
        $title=$_POST['title_product'];//cac truong
        $desc=$_POST['desc_product'];
        $price=$_POST['price_product'];
        $hot=$_POST['product_hot'];
        $quantity=$_POST['quantity_product'];
        
        $image=$_FILES['image_product']['name'];
       $tmp_image=$_FILES['image_product']['tmp_name'];
        
        $div = explode('.',$image);
        $file_ext =strtolower(end($div));
        $unique_image=$div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/product/".$unique_image;


        $category=$_POST['category_product'];
        $table="tbl_product";//ten bang
        $data = array(
            'title_product'=>$title,
            'desc_product'=>$desc,
            'price_product'=>$price,
            'product_hot'=>$hot,
            'quantity_product'=>$quantity,
            'image_product'=>$unique_image,
            'id_category_product'=>$category
        );
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->insertproduct($table,$data);
        if($result==1){
            move_uploaded_file( $tmp_image,$path_uploads);
            header('Location:'.BASE_URL."/product/add_product");
        }else{
            header('Location:'.BASE_URL."/product");
    }
    
        
    }
    public function list_product(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        
        $table_product="tbl_product";
        $table_category="tbl_category_product";
        $categorymodel =$this->load->model('categorymodel');
        $data['product']=$categorymodel->product($table_product,$table_category);

        $this->load->view('cpanel/product/list_product',$data);//chay vo file cpaner /product/add_product
        $this->load->view('cpanel/footer');

    }
    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        
        $table="tbl_category_product";
        $categorymodel =$this->load->model('categorymodel');
        $data['category']=$categorymodel->category($table);

        $this->load->view('cpanel/product/list_category',$data);//chay vo file cpaner /product/add_product
        $this->load->view('cpanel/footer');

    }
    public function delete_category($id){//ham o day ne
        $table="tbl_category_product";
        $cond="id_category_product='$id'";
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->deletecategory($table,$cond);
        header('Location:'.BASE_URL."/product/list_category");

    }
    public function delete_product($id){//ham o day ne
        $table="tbl_product";
        $cond="id_product='$id'";
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->deleteproduct($table,$cond);
        header('Location:'.BASE_URL."/product/list_product");

    }
    public function edit_category($id){
        $table="tbl_category_product";
        $cond="id_category_product='$id'";
        $categorymodel =$this->load->model('categorymodel');
        $data['categorybyid']=$categorymodel->categorybyid($table,$cond);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_category',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function edit_product($id){
        $table="tbl_product";
        $cond="id_product='$id'";
        $table_category="tbl_category_product";
        $categorymodel =$this->load->model('categorymodel');
       
        $data['productbyid']=$categorymodel->productbyid($table,$cond);
        $data['category']=$categorymodel->category($table_category);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_product',$data);//chay vo file cpaner /product/add_category
        $this->load->view('cpanel/footer');

    }
    public function update_product($id){
        $cond="id_product='$id'";
        $table="tbl_product";//ten bang
        $categorymodel =$this->load->model('categorymodel');
        $hot=$_POST['product_hot'];
        $title=$_POST['title_product'];//cac truong
        $desc=$_POST['desc_product'];
        $price=$_POST['price_product'];
        $quantity=$_POST['quantity_product'];
        $category=$_POST['category_product'];
        
        $image=$_FILES['image_product']['name'];
        $tmp_image=$_FILES['image_product']['tmp_name'];
        $div = explode('.',$image);
        $file_ext =strtolower(end($div));
        $unique_image=$div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/product/".$unique_image;

        if($image){
           
            $data['productbyid']=$categorymodel->productbyid($table,$cond);
            foreach($data['productbyid'] as $key =>$value){
                $path_unlink="public/uploads/product/";
               
                    unlink($path_unlink.$value['image_product']);

            }
          
            $data = array(
                'title_product'=>$title,
                'desc_product'=>$desc,
                'price_product'=>$price,
                'quantity_product'=>$quantity,
                'product_hot'=>$hot,
                'image_product'=>$unique_image,
                'id_category_product'=>$category
            );
            move_uploaded_file( $tmp_image,$path_uploads);

        }else{
            $data = array(
                'title_product'=>$title,
                'desc_product'=>$desc,
                'price_product'=>$price,
                'quantity_product'=>$quantity,
                'product_hot'=>$hot,
               // 'image_product'=>$unique_image,
                'id_category_product'=>$category
            );

        }

       
       
        $result=$categorymodel->updateproduct($table,$data,$cond);
        if($result==1){
            move_uploaded_file( $tmp_image,$path_uploads);
            header('Location:'.BASE_URL."/product/list_product");
        }else{
            header('Location:'.BASE_URL."/product/list_product");
    }

    }
    public function update_category_product($id){
        $table="tbl_category_product";
        $cond="id_category_product='$id'";
        $title=$_POST['title_category_product'];
        $desc=$_POST['desc_category_product'];
        $data = array(
            'title_category_product'=>$title,
            'desc_category_product'=>$desc
        );
        $categorymodel =$this->load->model('categorymodel');
        $result=$categorymodel->updatecategory($table,$data,$cond);
        header('Location:'.BASE_URL."/product/list_category");
        

    }
}


?>
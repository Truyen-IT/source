<?php
class login extends DController{//ten file trung voi ten class
    public function __construct(){
       $data = array();
       parent::__construct();
    
    }
    public function index(){
        return $this->login();
    }
    public function login(){
       
        Session::init();
        if(Session::get("login")==true){
            header("Location:".BASE_URL."/login/dashboart");

        }
        $this->load->view('cpanel/login');
        
    }
    public function dashboart(){
        
        $tbl_product='tbl_product';
        $tbl_order_details='tbl_order_details';
    

        $loginmodel=$this->load->model('loginmodel');
        $data['category']=$loginmodel->category_dashboart( $tbl_product,$tbl_order_details);
       // Session::destroy();
        
       // Session::checkSession();
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $this->load->view('cpanel/dashboard',$data);
        $this->load->view('cpanel/footer');
    }
    public function authentication_login(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $table_admin='tbl_admin';
        $captcha=$_POST['captcha'];
        $captcha_rand=$_POST['captcha-rand'];
        if($captcha==$captcha_rand){
        $loginmodel=$this->load->model('loginmodel');
        $count =$loginmodel->login($table_admin,$username,$password);
        }
        if($count==0){
            header("Location:".BASE_URL."/login");

        }else{
            $result=$loginmodel->getLogin($table_admin,$username,$password);
            Session::init();
            Session::set('login',true);
            Session::set('username',$result[0]['username']);
            Session::set('userid',$result[0]['admin_id']);
            $_SESSION['dangnhap'] = $username;

            
            header("Location:".BASE_URL."/login/dashboart",$_SESSION['dangnhap']);
        }

    }
    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:".BASE_URL."/login");
        
    }
    

   
   
   
    
        
    }


?>
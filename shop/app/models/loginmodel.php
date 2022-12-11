<?php
    class loginmodel extends DModel{//ke thua DModel nen duoc dung do cua DModel
       public function __construct(){
           parent::__construct();
       }
           

           public function login($table_admin,$username,$password)
        {
            $sql ="SELECT *FROM  $table_admin WHERE username=? AND  password=?";
            return $this->db->affectedRows($sql,$username,$password);
           
          
        }
        public function getLogin($table_admin,$username,$password){
            $sql ="SELECT *FROM  $table_admin WHERE username=? AND  password=?";
            return $this->db->selectUser($sql,$username,$password);

        }
        public function inserttaikhoan($table,$data)
        {
            return $this->db->insert($table,$data);
       
        }
        public function category_taikhoan( $table)
        {
            $sql ="SELECT *FROM  $table ORDER BY admin_id DESC";
            return $this->db->select($sql);//dua cai bien vao select ban se duoc ket noi den co so du lieu
           
          
        }
        public function deletecategory_taikhoan($table_category_product,$cond){
            return $this->db->delete($table_category_product,$cond);

        }
        public function categorybyid_taikhoan($table,$cond){
            $sql ="SELECT *FROM  $table WHERE $cond";
            return $this->db->select($sql);

        }
        public function updatecategory_taikhoan($table_category_product,$data,$cond){//chay ham update cua database
            return $this->db->update($table_category_product,$data,$cond);
        }
        public function category_dashboart($tbl_product,$tbl_order_details)
        {
            $sql ="SELECT $tbl_product.*, COUNT($tbl_order_details.product_quantity) AS 'number_cate' FROM $tbl_product INNER JOIN $tbl_order_details ON $tbl_product
            .id_product=$tbl_order_details.product_id GROUP BY tbl_product.id_product";
            return $this->db->select($sql);
           
          

        }
       
        }
       
        




    







?>




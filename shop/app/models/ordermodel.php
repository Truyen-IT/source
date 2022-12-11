<?php
    class ordermodel extends DModel{//ke thua DModel nen duoc dung do cua DModel
       public function __construct(){
           parent::__construct();
           

        }
        public function  insert_order($table_order,$data_order){
            return $this->db->insert($table_order,$data_order);

        }
        public function  insert_order_details($table_order_details,$data_order){
            return $this->db->insert($table_order_details,$data_order);


        }
        public function list_order( $table_order)
        {
            $sql ="SELECT *FROM  $table_order  ORDER BY order_id  DESC";
            return $this->db->select($sql);
           
          
        }
        public function list_order_details($table_order_details,$table_product,$cond){
            $sql ="SELECT *FROM $table_order_details,$table_product WHERE $cond";
            return $this->db->select($sql);

        }
        public function list_info($table_order_details,$cond){
            $sql ="SELECT *FROM $table_order_details WHERE $cond limit 1";
            return $this->db->select($sql);

        }
        public function order_comfirm($table_order,$data,$cond){
            return $this->db->update($table_order,$data,$cond);

        }
        




    }







?>
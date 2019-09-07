<?php
 class CarBrand_model extends CI_Model{


     public function get_brands()
     {
         return $this->db->order_by("id", "DESC")->get('car_brands')->result_array();
     }

     public function get_brands_row($where)
     {
         return $this->db->where($where)->get('car_brands')->row_array();
     }

     public function add_brand($data)
     {
         $this->db->insert("car_brands",$data);
     }


     public function update_brand($where, $data)
     {
         $this->db->where($where)->update("car_brands",$data);
     }


     public function delete_brand($where)
     {
         $this->db->where($where)->delete("car_brands");
     }


 }
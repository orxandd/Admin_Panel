<?php
 class CarClass_model extends CI_Model{


     public function get_brands()
     {
         return $this->db->order_by("id", "DESC")->get('car_brands')->result_array();
     }

     public function get_class_of_brands($where)
     {
         return $this->db->where($where)->get('car_class')->result_array();
     }

     public function add_class($data)
     {
         $this->db->insert("car_class",$data);
     }


     public function update_class($where, $data)
     {
         $this->db->where($where)->update("car_class",$data);
     }


     public function delete_class($where)
     {
         $this->db->where($where)->delete("car_class");
     }


 }
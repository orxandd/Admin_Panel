<?php
 class CarModel_model extends CI_Model{


     public function get_brands()
     {
         return $this->db->order_by("id", "DESC")->get('car_brands')->result_array();
     }

     public function get_classes($where)
     {
         return $this->db->where($where)->get('car_class')->result_array();
     }

     public function get_class_row($where)
     {
         return $this->db->where($where)->get('car_class')->row_array();
     }

     public function get_brand_row($where)
     {
         return $this->db->where($where)->get('car_brands')->row_array();
     }

     public function get_models($where)
     {
         return $this->db->where($where)->order_by("id", "DESC" )->get('car_models')->result_array();
     }

     public function get_model_row($where){
         return $this->db->where($where)->get("car_models")->row_array();
     }

     public function add_model($data)
     {
         $this->db->insert("car_models",$data);
     }

     public function update_model($where, $data)
     {
         $this->db->where($where)->update("car_models",$data);
     }

     public function delete_model($where)
     {
         $this->db->where($where)->delete("car_models");
     }


 }
<?php
 class Gallery_model extends CI_Model {

     public function __construct()
     {
         parent::__construct();
     }



//      qalereya hissesi

     public function get_gallery(){
         return $this->db->order_by("id", "DESC")->get("gallery")->result_array();
     }

     public function gallery_add($data){
         $this->db->insert("gallery", $data);
     }

     public function gallery_delete($where){
        return $this->db->where($where)->delete("gallery");
     }

//      qalereya hissesi


 }

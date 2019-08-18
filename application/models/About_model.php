<?php
 class About_model extends CI_Model{


     public function get_about()
     {
         return $this->db->get('about')->row_array();
     }

     public function update($data)
     {
         $this->db->update("about",$data);
     }



 }
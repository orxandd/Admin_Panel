<?php
class Login_model extends CI_Model{

    public function check_user($where){
        return $this->db->where($where)->get("admins")->row_array();
    }

    public function get_user(){
        return $this->db->where("id", 1)->get("admins")->row_array();
    }

    public function update_user($data){
        $this->db->where("id", 1)->update("admins", $data);
    }

}
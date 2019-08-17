<?php
 class Portfolio_model_woc extends CI_Model {

     public function __construct()
     {
         parent::__construct();
     }



//     portfolio listinin hissesi
     public function get_portfolio_list(){
         return $this->db->order_by("id", "DESC")->get("portfolio_woc")->result_array();
     }

     public function get_portfolio_list_e($name){
         return $this->db->where('category_name',$name)->order_by("id", "DESC")->get("portfolio_woc")->result_array();
     }

     public function get_portfolio_list_single($where){
         return $this->db->where($where)->get("portfolio_woc")->row_array();
     }

     public function portfolio_list_add($data){
         $this->db->insert("portfolio_woc", $data);
     }

     public function portfolio_list_update($where, $data){
         $this->db->where($where)->update("portfolio_woc", $data);
     }

     public function portfolio_list_delete($where){
         $this->db->where($where)->delete("portfolio_woc");
         $this->db->where("portfolio_id", $where["id"])->delete("portfolio_gallery");
     }
//     portfolio listinin hissesi




//     portfolio qalereya hissesi
     public function get_gellery_list(){
         return $this->db->where("is_primary", 1)->order_by("portfolio_id", "DESC")->get("portfolio_gallery")->result_array();
     }

     public function get_portfolio_gallery($where){
         return $this->db->where($where)->order_by("id", "DESC")->get("portfolio_gallery")->result_array();
     }

     public function portfolio_gallery_add($data){
         $this->db->insert("portfolio_gallery", $data);
     }

     public function portfolio_gallery_delete($where){
        return $this->db->where($where)->delete("portfolio_gallery");
     }

     public function portfolio_gallery_update($where, $data){
         $this->db->where($where)->update("portfolio_gallery", $data);
     }

     public function portfolio_gallery_update_old_category_in_portfolio_list($where, $data){
         $this->db->where($where)->update("portfolio", $data);
     }
//     portfolio qalereya hissesi


 }

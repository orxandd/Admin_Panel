 <?php
 class Portfolio_model extends CI_Model {

     public function __construct()
     {
         parent::__construct();
     }

//     portfolio kateqoriya hissesi
     public function get_portfolio_category(){
         return $this->db->order_by("id", "DESC")->get("portfolio_category")->result_array();
     }

     public function get_portfolio_category_single($where){
         return $this->db->where($where)->get("portfolio_category")->row_array();
     }

     public function portfolio_category_add($data){
         $this->db->insert("portfolio_category", $data);
    }

     public function portfolio_category_update($where, $data){
         $this->db->where($where)->update("portfolio_category", $data);
     }

     public function portfolio_category_delete($where){
         $this->db->where($where)->delete("portfolio_category");
     }
//     portfolio kateqoriya hissesi



//     portfolio listinin hissesi
     public function get_portfolio_list(){
         return $this->db->order_by("id", "DESC")->get("portfolio")->result_array();
     }

     public function get_portfolio_list_single($where){
         return $this->db->where($where)->get("portfolio")->row_array();
     }

     public function portfolio_list_add($data){
         $this->db->insert("portfolio", $data);
     }

     public function portfolio_list_update($where, $data){
         $this->db->where($where)->update("portfolio", $data);
     }

     public function portfolio_list_delete($where){
         $this->db->where($where)->delete("portfolio");
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

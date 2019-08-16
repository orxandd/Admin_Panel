<?php
     class Panel_admin_page_admin extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "admin";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Login_model");

             if (!$this->session->userdata("session")){
                 redirect(base_url("utech_admin_panel_login_page"));
             }

         }

         public function index()
         {

            $data["user"] = $this->Login_model->get_user();
            $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);

         }

         public function admin_update(){
            $usr = strip_tags($this->input->post("usr"));
            $psw = strip_tags($this->input->post("psw"));

            if (!empty($usr) && !empty($psw)){
                $this->Login_model->update_user(array(
                    "username" => $usr,
                    "password" => md5($psw),
                ));
                $this->session->set_flashdata("alert_success", "Admin Məlumatları Yeniləndi!");


            }else{
                $this->session->set_flashdata("alert_danger", "Boşluq Buraxmayın!");
            }

             redirect(base_url("utech_admin_panel_admin_update"));


         }


 }

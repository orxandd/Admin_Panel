<?php
     class Panel_admin_page_login extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "login";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Login_model");

         }

         public function index()
         {
             if ($this->session->userdata("session")){
                 redirect(base_url("utech_admin_panel_portfolio"));
             }

             $this->load->library("session");
             $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");

         }

         public function login_act(){

             if ($this->session->userdata("session")){
                 redirect(base_url("utech_admin_panel_portfolio"));
             }

             $usr = strip_tags($this->input->post("usr"));
             $psw = strip_tags($this->input->post("psw"));


            if (!empty($usr) && !empty($psw)){
                $result = $this->Login_model->check_user(array(
                        "username" => $usr,
                        "password" => md5($psw),
                ));

                if ($result){
                    $this->session->set_userdata("session", true);
                    $this->session->set_flashdata("alert", "Daxil Oldunuz");
                    redirect(base_url("utech_admin_panel_portfolio"));
                }else{
                    $this->session->set_flashdata("alert", "Username və ya Şifrə yanlışdır");
                    redirect("utech_admin_panel_login_page");
                }

            }else{
                $this->session->set_flashdata("alert", "Zəhmət olmasa boşluq buraxmayın!");
                redirect(base_url("utech_admin_panel_login_page"));
            }

         }

        public function logout(){
             $this->session->unset_userdata("session");
             redirect(base_url("utech_admin_panel_login_page"));
        }



 }

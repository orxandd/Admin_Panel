<?php
class Panel_admin_page_car_parts extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "car_parts";
        $this->includes_for_whole = "includes_for_whole";


        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }


    }

    public function index()
    {
        $this->load->library("session");
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");
    }

}

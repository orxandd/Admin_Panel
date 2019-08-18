<?php
class Panel_admin_page_about extends CI_Controller{
    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "about";
        $this->includes_for_whole = "includes_for_whole";


        $this->load->model("About_model");

        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }
    }

    public function index()
    {
        $data['about'] = $this->About_model->get_about();
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);

    }

    public function update()
    {
        $text=$this->input->post("desc");
        $data = [
          "text" => $text,
        ];
        if (!empty($text)) {
            $this->About_model->update($data);
            $this->session->set_flashdata("alert","Məlumat yeniləndi");

            redirect(base_url("secure_admin_panel_about"));

        }else{
            $this->session->set_flashdata("alert_danger","Boşluq buraxmayın");
            redirect(base_url("secure_admin_panel_about"));
        }
    }

}

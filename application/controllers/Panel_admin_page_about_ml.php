<?php
class Panel_admin_page_about_ml extends CI_Controller{
    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "about_ml";
        $this->includes_for_whole = "includes_for_whole";


        $this->load->model("About_model_ml");

        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }
    }

    public function index()
    {
        $data['about'] = $this->About_model_ml->get_about();
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);

    }

    public function update()
    {
        $text_az = $this->input->post("desc_az");
        $text_en = $this->input->post("desc_en");
        $text_ru = $this->input->post("desc_ru");
        $data = [
            "text_az" => $text_az,
            "text_en" => $text_en,
            "text_ru" => $text_ru,
        ];
        if (!empty($text_az) && !empty($text_en) && !empty($text_ru)) {
            $this->About_model_ml->update($data);
            $this->session->set_flashdata("alert","Məlumat yeniləndi");

            redirect(base_url("secure_admin_panel_about_ml"));

        }else{
            $this->session->set_flashdata("alert_danger","Boşluq buraxmayın");
            redirect(base_url("secure_admin_panel_about_ml"));
        }
    }

}

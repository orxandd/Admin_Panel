<?php
class Portfolio extends CI_Controller{
    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";
    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = 'frontend';
        $this->sub_folder = 'portfolio';
        $this->includes_for_whole = 'includes_for_whole_page';

        $this->load->model("Portfolio_model");
    }

    public function index()
    {
        $data["portfolio_category"] = $this->Portfolio_model->get_portfolio_category();
        $data["portfolio"] = $this->Portfolio_model->get_portfolio_list();
        $data["all_gallery"] = $this->Portfolio_model->get_gellery_list();

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }



}
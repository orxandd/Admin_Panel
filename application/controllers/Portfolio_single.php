<?php
class Portfolio_single extends CI_Controller{
    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";
    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = 'frontend';
        $this->sub_folder = 'portfolio_single';
        $this->includes_for_whole = 'includes_for_whole_page';

        $this->load->model("Portfolio_model");
    }

    public function page($id)
    {
        $data["portfolio_single"] = $this->Portfolio_model->get_portfolio_list_single(array(
            "id" => $id,
        ));
        $data["all_single_portfolio_gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
            "portfolio_id" => $id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }



}
<?php
class Panel_admin_page_car_brands extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "car_brands";
        $this->includes_for_whole = "includes_for_whole";


        $this->load->model("CarBrand_model");


        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }


    }


    public function brand(){
        $data["brands"] = $this->CarBrand_model->get_brands();

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }

    public function brand_add(){
        $this->load->view("$this->parent_folder/$this->sub_folder/car_brand_operations/brand_add");
    }

    public function brand_add_act(){
        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_brands';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");


            $this->CarBrand_model->add_brand(array(
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "img"     => ($cond) ? $this->upload->data('file_name') : "default.png",
            ));

            $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
            redirect(base_url("secure_admin_panel_car_brand"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_brand_add"));
        }

    }

    public function brand_update($id){
        $data["brand"] = $this->CarBrand_model->get_brands_row(array(
            "id" => $id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/car_brand_operations/brand_update", $data);

    }

    public function brand_update_act($id){
        $brand = $this->CarBrand_model->get_brands_row(array(
            "id" => $id,
        ));

        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_brands';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");

            if ($cond && $brand["img"] != "default.png"){
                unlink("uploads/car_brands/" . $brand["img"]);
            }

            $this->CarBrand_model->update_brand(

                array(
                    "id" => $id,
                ),

                array(
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "img"     => ($cond) ? $this->upload->data('file_name') : $brand["img"],
                )

            );

            $this->session->set_flashdata("alert", "Məlumatlar Yeniləndi!");
            redirect(base_url("secure_admin_panel_car_brand"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_brand_update/$id"));
        }



    }

    public function brand_delete($id){
        $brand = $this->CarBrand_model->get_brands_row(array(
            "id" => $id,
        ));

        if ($brand["img"] != "default.png"){
            unlink("uploads/car_brands/" . $brand["img"]);
        }

        $this->CarBrand_model->delete_brand(array(
            "id" => $id,
        ));


        $this->session->set_flashdata("alert", "Məlumat Silindi!");
        redirect(base_url("secure_admin_panel_car_brand"));
    }




}

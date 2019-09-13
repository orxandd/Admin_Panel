<?php
class Panel_admin_page_car_class extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "car_class";
        $this->includes_for_whole = "includes_for_whole";


        $this->load->model("CarClass_model");


        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }


    }


    public function brand_class(){
        $data["brands"] = $this->CarClass_model->get_brands();

        $this->load->view("$this->parent_folder/$this->sub_folder/car_brands_list/whole_page", $data);
    }

    public function car_class($brand_id){

        $data["brand_id"] = $brand_id;

        $data["classes"] = $this->CarClass_model->get_class_of_brands(array(
            "brand_id" => $brand_id
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }

    public function class_add($brand_id){

        $data["brand"] = $this->CarClass_model->get_brand_row(array(
            "id" => $brand_id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/car_class_operations/class_add", $data);
    }

    public function class_add_act($brand_id){
        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_classes';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");


            $this->CarClass_model->add_class(array(
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "brand_id" => $brand_id,
                "img"     => ($cond) ? $this->upload->data('file_name') : "default.png",
            ));

            $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
            redirect(base_url("secure_admin_panel_car_class_list/$brand_id"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_class_add/$brand_id"));
        }

    }

    public function class_update($brand_id, $id){
        $data["class"] = $this->CarClass_model->get_class_row(array(
            "id" => $id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/car_class_operations/class_update", $data);

    }

    public function class_update_act($brand_id, $id){
        $class = $this->CarClass_model->get_class_row(array(
            "id" => $id,
        ));

        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_classes';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");

            if ($cond && $class["img"] != "default.png"){
                unlink("uploads/car_classes/" . $class["img"]);
            }

            $this->CarClass_model->update_class(

                array(
                    "id" => $id,
                ),

                array(
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "img"     => ($cond) ? $this->upload->data('file_name') : $class["img"],
                )

            );

            $this->session->set_flashdata("alert", "Məlumatlar Yeniləndi!");
            redirect(base_url("secure_admin_panel_car_class_list/$brand_id"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_class_update/$brand_id/$id"));
        }



    }

    public function class_delete($id){
        $class = $this->CarClass_model->get_class_row(array(
            "id" => $id,
        ));

        if ($class["img"] != "default.png"){
            unlink("uploads/car_classes/" . $class["img"]);
        }

        $this->CarClass_model->delete_class(array(
            "id" => $id,
        ));


        $this->session->set_flashdata("alert", "Məlumat Silindi!");
        redirect(base_url("secure_admin_panel_car_class_list/$class[brand_id]"));
    }




}

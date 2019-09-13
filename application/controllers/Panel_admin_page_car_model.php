<?php
class Panel_admin_page_car_model extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "backend";
        $this->sub_folder = "car_model";
        $this->includes_for_whole = "includes_for_whole";


        $this->load->model("CarModel_model");


        if (!$this->session->userdata("session")){
            redirect(base_url("secure_admin_panel_login_page"));
        }


    }


    public function classes(){
        $data["brands"] = $this->CarModel_model->get_brands();

        $this->load->view("$this->parent_folder/$this->sub_folder/car_brands_list/whole_page", $data);
    }

    public function car_model($brand_id){

        $data["brand_id"] = $brand_id;

        $data["models"] = $this->CarModel_model->get_models(array(
            "brand_id" => $brand_id
        ));

        $data["classes"] = $this->CarModel_model->get_classes(array(
            "brand_id" => $brand_id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }

    public function model_add($brand_id){

        $data["brand"] = $this->CarModel_model->get_brand_row(array(
            "id" => $brand_id,
        ));


        $data["classes"] = $this->CarModel_model->get_classes(array(
            "brand_id" => $brand_id,
        ));

        $this->load->view("$this->parent_folder/$this->sub_folder/car_model_operations/model_add", $data);
    }

    public function model_add_act($brand_id){
        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));
        $category_class = strip_tags($this->input->post("class_category"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_model';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");


            $this->CarModel_model->add_model(array(
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "brand_id" => $brand_id,
                "class_id" => ($category_class  != 0) ? $category_class : null,
                "img"     => ($cond) ? $this->upload->data('file_name') : "default.png",
            ));

            $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
            redirect(base_url("secure_admin_panel_car_model_list/$brand_id"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_model_add/$brand_id"));
        }

    }

    public function model_update($brand_id, $id){
        $data["model"] = $this->CarModel_model->get_model_row(array(
            "id" => $id,
        ));

        $data["classes"] = $this->CarModel_model->get_classes(array(
            "brand_id" => $brand_id,
        ));

        $data["model_class"] = $this->CarModel_model->get_class_row(array(
            "id" => $data["model"]["class_id"],
        ));


        $this->load->view("$this->parent_folder/$this->sub_folder/car_model_operations/model_update", $data);

    }

    public function model_update_act($brand_id, $id){
        $model = $this->CarModel_model->get_model_row(array(
            "id" => $id,
        ));



        $category_name_az = strip_tags($this->input->post("category_name_az"));
        $category_name_en = strip_tags($this->input->post("category_name_en"));
        $category_name_ru = strip_tags($this->input->post("category_name_ru"));
        $category_class = strip_tags($this->input->post("class_category"));

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)){

            //      sekiller upload edilir
            $config['upload_path'] = 'uploads/car_model';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");

            if ($cond && $model["img"] != "default.png"){
                unlink("uploads/car_model/" . $model["img"]);
            }


            $this->CarModel_model->update_model(

                array(
                    "id" => $id,
                ),

                array(
                    "name_az" => $category_name_az,
                    "name_en" => $category_name_en,
                    "name_ru" => $category_name_ru,
                    "class_id" => ($category_class != 0) ? trim($category_class) : null,
                    "img"     => ($cond) ? $this->upload->data('file_name') : $model["img"],
                )

            );


            $this->session->set_flashdata("alert", "Məlumatlar Yeniləndi!");
            redirect(base_url("secure_admin_panel_car_model_list/$brand_id"));
        }else{

            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("secure_admin_panel_car_model_update/$brand_id/$id"));
        }



    }

    public function model_delete($id){
        $model = $this->CarModel_model->get_model_row(array(
            "id" => $id,
        ));

        if ($model["img"] != "default.png"){
            unlink("uploads/car_model/" . $model["img"]);
        }

        $this->CarModel_model->delete_model(array(
            "id" => $id,
        ));


        $this->session->set_flashdata("alert", "Məlumat Silindi!");
        redirect(base_url("secure_admin_panel_car_model_list/$model[class_id]"));
    }

    public function model_ajax_update($id){
        $data = strip_tags($this->input->post("my_data"));

        if ($this->input->post("my_data2") == "az"){
            $this->CarModel_model->update_model(
                array(
                    "id" => $id,
                ),
                array(
                    "name_az" => $data,
                )

            );
        }elseif ($this->input->post("my_data2") == "en"){
            $this->CarModel_model->update_model(
                array(
                    "id" => $id,
                ),
                array(
                    "name_en" => $data,
                )

            );
        }elseif ($this->input->post("my_data2") == "ru"){
            $this->CarModel_model->update_model(
                array(
                    "id" => $id,
                ),
                array(
                    "name_ru" => $data,
                )

            );
        }

    }

    public function model_ajax_update_select_tag($id){
        $category_class = strip_tags($this->input->post("my_data"));

        $this->CarModel_model->update_model(

            array(
                "id" => $id,
            ),

            array(
                "class_id" => ($category_class != 0) ? trim($category_class) : null,
            )

        );

        $data["model"] = $this->CarModel_model->get_model_row(array(
            "id" => $id,
        ));

        $data["model_class"] = $this->CarModel_model->get_class_row(array(
            "id" => $data["model"]["class_id"],
        ));

        echo $data["model_class"]["name_az"];

    }

    public function model_ajax_update_img($id){


        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file'))
        {
            echo 'oldu';

        }
        else
        {
            echo "olmadi";
        }

    }





}

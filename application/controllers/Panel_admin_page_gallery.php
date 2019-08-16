<?php
     class Panel_admin_page_gallery extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "gallery";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Gallery_model");

             if (!$this->session->userdata("session")){
                 redirect(base_url("secure_admin_panel_login_page"));
             }

         }


         public function gallery(){
             $data["gallery"] = $this->Gallery_model->get_gallery();

             $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);

         }

         public function gallery_add(){
             //      sekiller dropzonedan upload edilir
             $config['upload_path'] = 'uploads/gallery';
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['file']['name'];

             $this->load->library('upload',$config);
             $this->upload->initialize($config);
             $cond = $this->upload->do_upload("file");


             //      upload edilecek sekil database e yuklenir
             $data  = array(
                 "name"          => ($cond) ? $this->upload->data('file_name') : "default.jpg",
                 "upload_date"        => date("Y/m/d"),
             );


             //      eyger sekil upload oldusa succes olmadisa warning alerti versin
             if ($cond){
                 $this->session->set_flashdata("alert", "Şəkil Yükləndi!");
             }else{
                 $this->session->set_flashdata("alert_danger", "Şəkil Yüklənmədi!");
             }

             $this->Gallery_model->gallery_add($data);
         }

         public function refresh_image_list_gallery(){
             $data["gallery"] = $this->Gallery_model->get_gallery();

             $this->load->view("$this->parent_folder/$this->sub_folder/gallery_list_render_page/gallery_table", $data);

         }

         public function gallery_delete($gallery_id){
             $cond = $this->Gallery_model->gallery_delete(array(
                 "id" => $gallery_id,
             ));

             if ($cond){
                 $this->session->set_flashdata("alert", "Məlumat Silindi!");
             }else{
                 $this->session->set_flashdata("alert_danger", "Xəta baş verdi!");
             }

             $data["gallery"] = $this->Gallery_model->get_gallery();

             $this->load->view("$this->parent_folder/$this->sub_folder/gallery_list_render_page/gallery_table", $data);

         }

         public function gallery_delete_group(){
             $idler = $this->input->post("data");

             if ($idler){
                 foreach ($idler as $a_id => $id){
                     $this->Gallery_model->gallery_delete(array(
                         "id" => $id,
                     ));
                 }
             }


             ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

             $data["gallery"] = $this->Gallery_model->get_gallery();

             $this->load->view("$this->parent_folder/$this->sub_folder/gallery_list_render_page/gallery_table", $data);

         }

         public function gallery_delete_all(){


             $idler = $this->input->post("data");

             if ($idler){
                 foreach ($idler as $a_id => $id){
                     $this->Gallery_model->gallery_delete(array(
                         "id" => $id,
                     ));
                 }
             }


             ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

             $data["gallery"] = $this->Gallery_model->get_gallery();

             $this->load->view("$this->parent_folder/$this->sub_folder/gallery_list_render_page/gallery_table", $data);

         }


 }

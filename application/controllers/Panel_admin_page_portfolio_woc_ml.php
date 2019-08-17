<?php
     class Panel_admin_page_portfolio_woc_ml extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "portfolio_woc_ml";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Portfolio_model_woc_ml");


             if (!$this->session->userdata("session")){
                 redirect(base_url("secure_admin_panel_login_page"));
             }


         }

         public function index()
         {
             $this->load->library("session");
             $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");
         }



//         =======================Umumi portfoliolarin hissesi =================================
         public function portfolio_list(){
             $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list();
             $data["all_gallery"] = $this->Portfolio_model_woc_ml->get_gellery_list();


             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/whole_page", $data);
         }

         public function portfolio_list_add(){
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_operations/portfolio_list_add");
         }

         public function portfolio_list_add_act(){
             $name_az = strip_tags($this->input->post("name_az"));
             $name_en = strip_tags($this->input->post("name_en"));
             $name_ru = strip_tags($this->input->post("name_ru"));
             $desc_az = $this->input->post("desc_az");
             $desc_en = $this->input->post("desc_en");
             $desc_ru = $this->input->post("desc_ru");

             if (!empty($name_az) && !empty($name_en) && !empty($name_ru) && !empty($desc_az) && !empty($desc_en) && !empty($desc_ru)){

                 $this->Portfolio_model_woc_ml->portfolio_list_add(array(
                     "name_az" => $name_az,
                     "name_en" => $name_en,
                     "name_ru" => $name_ru,
                     "desc_az" => $desc_az,
                     "desc_en" => $desc_en,
                     "desc_ru" => $desc_ru,
                     "upload_date" => date("y:m:d"),
                 ));
                 $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
                 redirect(base_url("secure_admin_panel_portfolio_list_woc_ml"));

             }else{
                 $this->session->set_flashdata("alert_danger", "Zəhmət olmasa boşluq buraxmayın!");
                 redirect(base_url("secure_admin_panel_portfolio_add_woc_ml"));
             }
         }

         public function portfolio_list_update($id){
             $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                 "id" => $id,
             ));

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_operations/portfolio_list_update", $data);
         }

         public function portfolio_list_update_act($id){
             $name_az = strip_tags($this->input->post("name_az"));
             $name_en = strip_tags($this->input->post("name_en"));
             $name_ru = strip_tags($this->input->post("name_ru"));
             $desc_az = $this->input->post("desc_az");
             $desc_en = $this->input->post("desc_en");
             $desc_ru = $this->input->post("desc_ru");

             if (!empty($name_az) && !empty($name_en) && !empty($name_ru) && !empty($desc_az) && !empty($desc_en) && !empty($desc_ru)){
                 $this->Portfolio_model_woc_ml->portfolio_list_update(

                     array(
                         "id" =>$id,
                     ),

                     array(
                         "name_az" => $name_az,
                         "name_en" => $name_en,
                         "name_ru" => $name_ru,
                         "desc_az" => $desc_az,
                         "desc_en" => $desc_en,
                         "desc_ru" => $desc_ru,
                         "upload_date" => date("y:m:d"),
                     )
                 );
                 $this->session->set_flashdata("alert", "Məlumat Yeniləndi!");
                 redirect(base_url("secure_admin_panel_portfolio_list_woc_ml"));
             }else{
                 $this->session->set_flashdata("alert_danger", "Zəhmət olmasa boşluq buraxmayın!");
                 redirect(base_url("secure_admin_panel_portfolio_update_woc_ml/$id"));
             }


         }

         public function portfolio_list_delete($id){
             $this->Portfolio_model_woc_ml->portfolio_list_delete(array(
                 "id" => $id,
             ));

             $this->session->set_flashdata("alert", "Məlumat Silindi!");
             $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list();
             $data["all_gallery"] = $this->Portfolio_model_woc_ml->get_gellery_list();

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_render_page/portfolio_table", $data);

         }
//         =======================Umumi portfoliolarin hissesi =================================





//         =======================Portfoliolarin qalereya hissesi =================================

        public function portfolio_gallery($id){
            $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
                "portfolio_id" => $id
            ));

            $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                "id" => $id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/whole_page", $data);

        }

        public function portfolio_gallery_add($id){
            //      sekiller dropzonedan upload edilir
            $config['upload_path'] = 'uploads/portfolio';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");


            //      upload edilecek sekil database e yuklenir
            $data  = array(
                "name"          => ($cond) ? $this->upload->data('file_name') : "default.jpg",
                "upload_date"        => date("Y/m/d"),
                "portfolio_id" => $id,
            );


            //      eyger sekil upload oldusa succes olmadisa warning alerti versin
            if ($cond){
                $this->session->set_flashdata("alert", "Şəkil Yükləndi!");
            }else{
                $this->session->set_flashdata("alert_danger", "Şəkil Yüklənmədi!");
            }

            $this->Portfolio_model_woc_ml->portfolio_gallery_add($data);
        }

        public function refresh_image_list_gallery($id){
            $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
                "portfolio_id" => $id,
            ));

            $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                "id" => $id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

         public function portfolio_gallery_delete($portfolio_id, $gallery_id){
         $cond = $this->Portfolio_model_woc_ml->portfolio_gallery_delete(array(
             "id" => $gallery_id,
         ));

         if ($cond){
             $this->session->set_flashdata("alert", "Məlumat Silindi!");
         }else{
             $this->session->set_flashdata("alert_danger", "Xəta baş verdi!");
         }

         $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
             "portfolio_id" => $portfolio_id,
         ));

         $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
             "id" => $portfolio_id,
         ));

         $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

     }

        public function portfolio_gallery_primary($portfolio_id, $id){

            if($id && $portfolio_id){
                $status = ($this->input->post("data")) == "true" ? 1 : 0;

                $this->Portfolio_model_woc_ml->portfolio_gallery_update(
                    array(
                        "id" => $id,
                        "portfolio_id" => $portfolio_id,
                    ),

                    array(
                        "is_primary" => $status
                    )
                );


                $this->Portfolio_model_woc_ml->portfolio_gallery_update(
                    array(
                        "id !="         => $id,
                        "portfolio_id"  => $portfolio_id,
                    ),

                    array(
                        "is_primary" => 0
                    )
                );


                $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
                    "portfolio_id" => $portfolio_id,
                ));

                $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                    "id" => $portfolio_id,
                ));

                $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);
            }


        }

        public function prtfolio_gallery_delete_group($portfolio_id){
            $idler = $this->input->post("data");

            if ($idler){
                foreach ($idler as $a_id => $id){
                    $this->Portfolio_model_woc_ml->portfolio_gallery_delete(array(
                        "id" => $id,
                    ));
                }
            }


            ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

            $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
                "portfolio_id" => $portfolio_id,
            ));

            $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                "id" => $portfolio_id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

        public function prtfolio_gallery_delete_all($portfolio_id){


            $idler = $this->input->post("data");

            if ($idler){
                foreach ($idler as $a_id => $id){
                    $this->Portfolio_model_woc_ml->portfolio_gallery_delete(array(
                        "id" => $id,
                    ));
                }
            }


            ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

            $data["gallery"] = $this->Portfolio_model_woc_ml->get_portfolio_gallery(array(
                "portfolio_id" => $portfolio_id,
            ));

            $data["portfolio"] = $this->Portfolio_model_woc_ml->get_portfolio_list_single(array(
                "id" => $portfolio_id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

//         =======================Portfoliolarin qalereya hissesi =================================



 }

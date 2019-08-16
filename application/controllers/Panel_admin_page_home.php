 <?php
     class Panel_admin_page_home extends CI_Controller{

         public function __construct()
         {
             parent::__construct();
         }

         public function index()
         {
             $this->load->view('backend/dashboard/whole_page');
         }






 }

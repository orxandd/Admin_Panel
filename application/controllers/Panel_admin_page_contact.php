<?php class Panel_admin_page_contact extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Contact_Model");
    }


    public function index()
    {
        $data['messages'] = $this->Contact_Model->get_messages();
        $this->load->view('backend/contact/whole_page',$data);
    }

    public function delete_message($id)
    {
        $this->Contact_Model->delete_msg([
            'id'=>$id,
        ]);

        $this->session->set_flashdata("sccs", "Mesaj silindi!");

        redirect(base_url('utech_admin_panel_message'));
    }

    public function single_message($id)
    {
        $data['message'] = $this->Contact_Model->get_message([
            'id' => $id
        ]);
        $this->load->view('backend/contact/single_whole_page',$data);
    }


}

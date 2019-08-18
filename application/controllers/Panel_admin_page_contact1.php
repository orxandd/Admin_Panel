<?php class Panel_admin_page_contact1 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Contact_Model");

        if (!$this->session->userdata("session")){
            redirect(base_url("utech_admin_panel_login_page"));
        }

    }


    public function index()
    {

        $data['messages'] = $this->Contact_Model->get_messages();
        $data['contact'] = $this->Contact_Model->get_contact();
        $this->load->view('backend/contact/whole_page',$data);
    }


    public function contact_update()
    {
        $mail=strip_tags($this->input->post("mail"));
        $phone=strip_tags($this->input->post("phone"));
        $adress=strip_tags($this->input->post("adress"));
        $data = [
          'adress' => $adress,
          'email' => $mail,
          'number' => $phone,
        ];
        $this->Contact_Model->update_contact($data);
        $this->session->set_flashdata("alert","Məlumat yeniləndi");
        redirect(base_url("secure_admin_panel_message"));

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

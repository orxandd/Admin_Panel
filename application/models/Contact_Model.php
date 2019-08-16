<?php class Contact_Model extends CI_Model {

    public function insert_message($data)
    {
        $this->db->insert('contact',$data);
    }

    public function get_messages()
    {
        return $this->db->order_by('id','DESC')->get("contact")->result_array();
    }

    public function delete_msg($where)
    {
        $this->db->where($where)->delete("contact");
}

    public function get_message($where)
    {
        return $this->db->where($where)->get("contact")->row_array();
    }
}

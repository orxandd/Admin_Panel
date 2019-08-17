<?php class Contact_Model extends CI_Model {

    public function insert_message($data)
    {
        $this->db->insert('messages',$data);
    }

    public function get_messages()
    {
        return $this->db->order_by('id','DESC')->get("messages")->result_array();
    }

    public function delete_msg($where)
    {
        $this->db->where($where)->delete("messages");
}

    public function get_message($where)
    {
        return $this->db->where($where)->get("messages")->row_array();
    }

    public function update_contact($data)
    {
        $this->db->update("contact1",$data);
    }

    public function get_contact()
    {
        return $this->db->get("contact1")->row_array();
    }
}

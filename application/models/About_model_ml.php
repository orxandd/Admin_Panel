<?php

class About_model_ml extends CI_Model
{


    public function get_about()
    {
        return $this->db->get('about_ml')->row_array();
    }

    public function update($data)
    {
        $this->db->update("about_ml", $data);
    }


}
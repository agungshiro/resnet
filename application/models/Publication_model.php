<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Publication_model extends CI_Model {

    private $_db = 'publication';

    public function __construct() {

        parent::__construct();

    }

    public function add_publication($data = array()) {
        if($data) {            
            $sql = "
                INSERT INTO {$this->_db} (
                    user_id,
                    title,
                    link,
                    abstract
                ) VALUE (
                    {$this->db->escape($data['user_id'])},
                    {$this->db->escape($data['title'])},
                    {$this->db->escape($data['link'])},
                    {$this->db->escape($data['abstract'])}
                )
            ";

            $this->db->query($sql);

            if ($id = $this->db->insert_id())
            {
                return $id;
            }
        }
    }

    public function get_my_publication($uid = NULL) {
        $sql = "
            SELECT * 
            FROM {$this->_db} 
            WHERE user_id = {$uid}
        ";

        $query = $this->db->query($sql);

        if ($query->num_rows())
        {
            return $query->result_array();
        }

        return false;
    }

}
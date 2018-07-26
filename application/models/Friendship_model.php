<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Friendship_model extends CI_Model {

    private $_db;

    function __construct() {
        parent::__construct();
        $this->_db = 'friendship';
    }

    public function request_follow($data =array()) {
        if($data) {            
            $sql = "
                INSERT INTO {$this->_db} (
                    user1,
                    user2,
                    relation
                ) VALUE (
                    {$this->db->escape($data['mid'])},
                    {$this->db->escape($data['yid'])},
                    'ignored'
                )
            ";

            $this->db->query($sql);

            if ($id = $this->db->insert_id())
            {
                return $id;
            }
        }
    }

    public function check_requested($data = array()) {
        if($data) {

            $sql = "
                SELECT id_friendship
                FROM {$this->_db}
                WHERE user1 = {$this->db->escape($data['mid'])}
                AND user2 = {$this->db->escape($data['yid'])}
                AND relation = 'ignored'
                LIMIT 1
            ";

            $query = $this->db->query($sql);

            if ($query->num_rows())
            {
                return TRUE;
            }
        }

        return FALSE;
    }

}
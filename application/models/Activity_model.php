<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model {

    private $_db;

    public function __construct() {
        
        parent::__construct();

        $this->_db = 'activity';

    }

    public function push($data=array()) {
        
        if($data) {
            
            $sql = "
            INSERT INTO {$this->_db} (
                user_id,
                content,
                datetime
            ) VALUE (
                {$this->db->escape($data['user_id'])},
                {$this->db->escape($data['content'])},
                '".date('Y-m-d H:i:s')."'
            )
            ";

            $this->db->query($sql);

            if ($id = $this->db->insert_id())
            {
                return $id;
            }
        }

        return FALSE;
        
    }

    public function get_my_activity($id) {

    }

    public function get_timeline($id) {
        
    }

}

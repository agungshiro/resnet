<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Friendship_model extends CI_Model {

    private $_db;
    private $_db_followed;

    function __construct() {
        parent::__construct();
        $this->_db = 'friendship';
        $this->_db_followed = 'imfollowed';
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
                $this->do_update($data['mid']);
                return $id;
            }
        }
    }

    public function do_update($uid) {
        
        $friends = array();

        $friends = $this->get_my_friends($uid);

        $this->update_friendlist($uid,$friends);
        
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

    public function get_my_friends($uid = NULL) {
        $friends = array();
        
        $sql = "
            SELECT user2
            FROM {$this->_db}
            WHERE user1 = {$this->db->escape($uid)} 
        ";

        $query = $this->db->query($sql);

        if ($query->num_rows())
        {
            /*
            echo '<pre>';
            echo $query->result_array();
            echo '</pre>';
            exit;*/
            foreach($query->result_array() as $k => $v) {
                $friends = array_push($friends,$v);
            }
        }

        $sql2 = "
            SELECT user1 
            FROM {$this->_db} AS f 
            WHERE f.user2 = {$uid} 
            AND f.relation = 'friend' 
        ";

        $query2 = $this->db->query($sql2);

        if ($query2->num_rows())
        {
            foreach($query->result_array() as $k => $v) {
                $friends = array_push($friends,$v);
            }
        }

        return $friends;


    }

    public function update_friendlist($uid = NULL, $friendlist = array()) {
        $f_val = implode(',',$friendlist);

        $sql = "
            UPDATE {$this->_db_followed} 
            SET followed = {$f_val} 
            WHERE user_id = {$uid}
        ";
        $query = $this->db->query($sql);
    }

    public function get_friendlist($uid = NULL) {
        $sql = "
            SELECT followed 
            FROM {$this->_db_followed} 
            WHERE user_id = {$uid}
        ";

        $query = $this->db->query($sql);

        if ($query->num_rows())
        {
            return $query->row_array();
        }

        return false;
    }

}
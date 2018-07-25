<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {

    /**
     * @vars
     */
    private $_db;


    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // define primary table
        $this->_db = 'notification';
    }

    function get_all($user_id, $limit = 0, $offset = 0) {
        
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS * FROM {$this->_db} n 
            WHERE n.user_id = {$user_id}
            ORDER BY datetime DESC "
            ;

        
        // add limit and offset
        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        // get total count
        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        // return results
        return $results;

    }

}
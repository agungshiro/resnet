<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model {

    private $_db;

    public function __construct() {
        
        parent::__construct();

        $this->_db = 'activity';

    }

    

}

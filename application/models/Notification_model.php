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

}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends Private_Controller { 

    public function __construct() {
        
        parent::__construct();

    }

    public function index() {
        // setup page header data
        $this->set_title(sprintf('My Timeline', $this->settings->site_name));

        $data = $this->includes;

        // set content data
        $content_data = array(
            'welcome_message' => $this->settings->welcome_message[$this->session->language]
        );

        // load views
        $data['content'] = $this->load->view('timeline/tl_list', $content_data, TRUE);
		$this->load->view($this->template, $data);
    }

}
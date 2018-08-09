<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends Private_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('activity_model');
    }

    public function post() {
        $this->load->library('user_agent');

        $data = array();

        $data['content'] = $this->input->post('Message');
        $data['user_id'] = $this->user['id'];

        //todo : add success and fail notification 
        $this->activity_model->push($data);

        redirect($this->agent->referrer());
    }

}
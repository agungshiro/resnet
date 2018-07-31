<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Follow extends Private_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('users_model');
        $this->load->model('friendship_model');
        $params = array('id'=>$this->user['id']);
        $this->load->library('notification',$params);
    }

    public function index() {
        $rid = $this->input->get('rid');
        echo $this->user['id'];
        
        if($user_data = $this->users_model->get_user($rid)) {
            
            $data = array();

            $my_data = $this->users_model->get_user($this->user['id']);

            $data['mid'] = $this->user['id'];
            $data['yid'] = $rid;

            $myname = $my_data['first_name']." ".$my_data['last_name'];

            $this->friendship_model->request_follow($data);
            $this->notification->follow_notif($data['mid'],$data['yid'],$myname );

            redirect(base_url('profile'));

        }
    }

}
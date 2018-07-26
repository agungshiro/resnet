<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification {

    private $uid;
    protected $CI;
    
    public function __construct($params) {
        $this->uid = $params['id'];
        $this->CI =& get_instance();
        $this->CI->load->model('notification_model');
    }

    public function follow_notif($mid,$yid,$name) {
        $msg = "{$name} is following you.";
        $data = array('uid'=>$yid,'msg'=>$msg);
        $this->CI->notification_model->push($data);

    }

    public function activity_notif() {

    } 
}
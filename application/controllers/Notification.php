<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends Private_Controller {

    public function __construct() {
        parent::__construct();

        // load the users model
        $this->load->model('notification_model');

        // set constants
        define('REFERRER', "referrer");
        define('THIS_URL', base_url('message'));
        define('DEFAULT_LIMIT', $this->settings->per_page_limit);
        define('DEFAULT_OFFSET', 0);
        define('DEFAULT_SORT', "created");
        define('DEFAULT_DIR', "DESC");

        // use the url in session (if available) to return to the previous filter/sorted/paginated list
        if ($this->session->userdata(REFERRER))
        {
            $this->_redirect_url = $this->session->userdata(REFERRER);
        }
        else
        {
            $this->_redirect_url = THIS_URL;
        }
    }

    public function index() {
        
        $limit  = $this->input->get('limit')  ? $this->input->get('limit', TRUE)  : DEFAULT_LIMIT;
        $offset = $this->input->get('offset') ? $this->input->get('offset', TRUE) : DEFAULT_OFFSET;

        // save the current url to session for returning
        $this->session->set_userdata(REFERRER, THIS_URL . "?sort={$sort}&dir={$dir}&limit={$limit}&offset={$offset}{$filter}");

        /// get list
        $messages = $this->notification_model->get_all($this->user['id'], $limit, $offset);

        // build pagination
        $this->pagination->initialize(array(
            'base_url'   => THIS_URL . "?limit={$limit}",
            'total_rows' => $messages['total'],
            'per_page'   => $limit
        ));

        // setup page header data
		$this
			->add_css_theme('bootstrap-datepicker.css')
			->add_js_theme('bootstrap-datepicker.js')
			->add_js_theme('contact_i18n.js', TRUE)
			->set_title(lang('contact title messages_list'));

        $data = $this->includes;

        // set content data
        $content_data = array(
            'this_url'   => THIS_URL,
            'messages'   => $messages['results'],
            'total'      => $messages['total'],
            'filters'    => $filters,
            'filter'     => $filter,
            'pagination' => $this->pagination->create_links(),
            'limit'      => $limit,
            'offset'     => $offset,
            'sort'       => $sort,
            'dir'        => $dir
        );

        // load views
        $data['content'] = $this->load->view('notification/n_list', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }

}
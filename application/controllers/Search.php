<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Private_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('users_model');

        define('DEFAULT_TERM', "null");
        define('THIS_URL', base_url('message'));
        define('DEFAULT_LIMIT', $this->settings->per_page_limit);
        define('DEFAULT_OFFSET', 0);

    }

    public function index() {

        $limit  = $this->input->get('limit')  ? $this->input->get('limit', TRUE)  : DEFAULT_LIMIT;
        $offset = $this->input->get('offset') ? $this->input->get('offset', TRUE) : DEFAULT_OFFSET;
        $term = $this->input->get('term') ? $this->input->get('term', TRUE) : DEFAULT_TERM;

        // get list
        $srch = $this->users_model->search($term,$limit, $offset,$this->user['id']);

        // build pagination
        $this->pagination->initialize(array(
            'base_url'   => THIS_URL . "?term={$sort}&limit={$limit}&offset={$offset}",
            'total_rows' => $srch['total'],
            'per_page'   => $limit
        ));

        // setup page header data
		$this
			->add_css_theme('bootstrap-datepicker.css')
			->add_js_theme('bootstrap-datepicker.js')
			->add_js_theme('contact_i18n.js', TRUE)
			->set_title('Search '.$term);

        $data = $this->includes;

        // set content data
        $content_data = array(
            'this_url'   => THIS_URL,
            'result'     => $srch['results'],
            'total'      => $srch['total'],
            'pagination' => $this->pagination->create_links(),
            'limit'      => $limit,
            'offset'     => $offset,
            'dir'        => $dir
        );

        // load views
        $data['content'] = $this->load->view('search/s_list', $content_data, TRUE);
        $this->load->view($this->template, $data);

    }

}
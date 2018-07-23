<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends Private_Controller {

    public function __construct() {
        parent::__construct();

        // load the users model
        $this->load->model('message_model');

        // set constants
        define('REFERRER', "referrer");
        define('THIS_URL', base_url('message'));
        define('DEFAULT_LIMIT', $this->settings->per_page_limit);
        define('DEFAULT_OFFSET', 0);
        define('DEFAULT_SORT', "datetime");
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
        $sort   = $this->input->get('sort')   ? $this->input->get('sort', TRUE)   : DEFAULT_SORT;
        $dir    = $this->input->get('dir')    ? $this->input->get('dir', TRUE)    : DEFAULT_DIR;

        // get filters
        $filters = array();

        if ($this->input->get('name'))
        {
            $filters['name'] = $this->input->get('name', TRUE);
        }

        if ($this->input->get('datetime'))
        {
            $filters['datetime'] = date('Y-m-d', strtotime(str_replace('-', '/', $this->input->get('created', TRUE))));
        }

        // build filter string
        $filter = "";
        foreach ($filters as $key => $value)
        {
            $filter .= "&{$key}={$value}";
        }

        // save the current url to session for returning
        $this->session->set_userdata(REFERRER, THIS_URL . "?sort={$sort}&dir={$dir}&limit={$limit}&offset={$offset}{$filter}");

        // are filters being submitted?
        if ($this->input->post())
        {
            if ($this->input->post('clear'))
            {
                // reset button clicked
                redirect(THIS_URL);
            }
            else
            {
                // apply the filter(s)
                $filter = "";

                if ($this->input->post('name'))
                {
                    $filter .= "&name=" . $this->input->post('name', TRUE);
                }

                if ($this->input->post('datetime'))
                {
                    $filter .= "&datetime=" . $this->input->post('datetime', TRUE);
                }

                // redirect using new filter(s)
                redirect(THIS_URL . "?sort={$sort}&dir={$dir}&limit={$limit}&offset={$offset}{$filter}");
            }
        }

        // get list
        $messages = $this->message_model->get_all($this->user['id'],$limit, $offset, $filters, $sort, $dir);

        // build pagination
        $this->pagination->initialize(array(
            'base_url'   => THIS_URL . "?sort={$sort}&dir={$dir}&limit={$limit}{$filter}",
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
        $data['content'] = $this->load->view('message/m_list', $content_data, TRUE);
        $this->load->view($this->template, $data);
    }

}
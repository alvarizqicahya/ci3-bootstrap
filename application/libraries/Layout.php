<?php
class Layout
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function display($template, $data = null)
    {
        $data['_body'] = $this->_ci->load->view($template, $data, true);
        $data['_topbar'] = $this->_ci->load->view('layouts/topbar', $data, true);
        $data['_sidebar'] = $this->_ci->load->view('layouts/sidebar', $data, true);
        $data['_footer'] = $this->_ci->load->view('layouts/footer', $data, true);
        $this->_ci->load->view('index', $data);
    }
}

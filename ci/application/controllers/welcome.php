<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('/home1/webfootd/www/sarah/ci/application/libraries/REST_Controller.php');

/**
 * Class Welcome
 */
class Welcome extends REST_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }
public function index_get()
{
$this->load->database();
$this->response($this->db->get('User')->result());
}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

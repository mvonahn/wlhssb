<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

class Contact extends REST_Controller
{
    public function index_get($team = null)
    {
        $this->load->model('Coach_model', '', true);

        $coaches = $this->Coach_model->getCoaches($team);

        $this->response($coaches);
    }

    public function varsity_get()
    {
        $this->index_get('Varsity');
    }

    public function jv_get()
    {
        $this->index_get('JV');
    }
}
<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

/**
 * Class University
 */
class Roster extends REST_Controller
{
    public function index_get($team)
    {
        $this->load->model('Roster_model', '', true);

        $roster = $this->Roster_model->getRoster($team);

        $this->response($roster);
    }

    public function varsity_get()
    {
        $this->index_get('varsity');
    }

    public function jv_get()
    {
        $this->index_get('jv');
    }
}
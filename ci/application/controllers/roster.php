<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('/home1/webfootd/www/westlinnsoftball/ci/application/libraries/REST_Controller.php');

/**
 * Class University
 */
class Roster extends REST_Controller
{
    public function index_get()
    {
        $this->load->model('Roster_model', '', true);

        $roster = $this->Roster_model->getRoster();

        $this->response($roster);
    }
}
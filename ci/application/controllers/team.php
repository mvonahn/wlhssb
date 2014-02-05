<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('/home1/webfootd/www/westlinnsoftball/ci/application/libraries/REST_Controller.php');

/**
 * Class University
 */
class Team extends REST_Controller
{
    public function index_get($team)
    {
        $this->load->model('Team_model', '', true);

        $roster = $this->Team_model->getTeam($team);

        $this->response($roster);
    }

    public function varsity_get()
    {
        $team = array(
          "name" => 'Varsity',
           "coaches" => array('Head' => 'Scott Smith',
           'Assistant' => 'Andy Schrank'),
            "wins" => '0 (0)',
            "losses" => '0 (0)'
        );
        $this->response($team);
    }

    public function jv_get()
    {
        $team = array(
            "name" => 'JV',
            "coaches" => array('Head' => 'Angie Hemming'),
            "wins" => '0 (0)',
            "losses" => '0 (0)'
        );
        $this->response($team);
    }
}
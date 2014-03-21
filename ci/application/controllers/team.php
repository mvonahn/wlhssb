<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

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
        $this->load->model('Coach_model', '', true);

        $coaches = $this->Coach_model->getCoaches('Varsity');

        $team = array(
          "name" => 'Varsity',
           "coaches" => $coaches,
            "wins" => '1 (0)',
            "losses" => '1 (0)'
        );
        $this->response($team);
    }

    public function jv_get()
    {

        $this->load->model('Coach_model', '', true);

        $coaches = $this->Coach_model->getCoaches('JV');

        $team = array(
            "name" => 'JV',
            "coaches" => $coaches,
            "wins" => '1 (0)',
            "losses" => '1 (0)'
        );
        $this->response($team);
    }
}
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
        $team = $this->getTeamData('Varsity');
        $this->response($team);
    }

    public function jv_get()
    {
        $team = $this->getTeamData('JV');
        $this->response($team);
    }

    private function getTeamData($team)
    {
        $this->load->model('Coach_model', '', true);

        $coaches = $this->Coach_model->getCoaches($team);

        $this->load->model('Game_model', '', true);

        $results = $this->Game_model->getResults($team);

        $teamData = array(
            "name" => $team,
            "coaches" => $coaches,
            "results" => $results
        );
        return $teamData;
    }

}
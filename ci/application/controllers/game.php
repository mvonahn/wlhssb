<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

/**
 * Class University
 */
class Game extends REST_Controller
{
    public function index_get($team)
    {
        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames($team);

        $this->response($games);
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
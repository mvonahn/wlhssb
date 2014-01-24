<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('/home1/webfootd/www/westlinnsoftball/ci/application/libraries/REST_Controller.php');

/**
 * Class University
 */
class Game extends REST_Controller
{
    public function index_get()
    {
        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames();

        $this->response($games);
    }
}
<?php

/**
 * Class Event_model
 */
class Event_model extends CI_Model
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        log_message('debug', 'WLHSSB: Event Model loaded');
    }
    public function getEvents()
    {
        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames();
    }
}

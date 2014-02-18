<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

/**
 * Class events
 */
class events extends REST_Controller
{
    public function index_get()
    {
        $this->load->model('Event_model', '', true);

        $events = $this->Event_model->getEvents();

        $this->response($events);
    }

    public function upcoming_get()
    {
        $this->load->model('Event_model', '', true);

        $events = $this->Event_model->getUpcomingEvents();

        $this->response($events);
    }

    public function team_get()
    {
        $this->load->model('Event_model', '', true);

        $events = $this->Event_model->getEvents($this->get('start'), $this->get('end'));

        $this->response($events);
    }

    public function jv_get()
    {

        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames('JV');
        $events = array();

        foreach ($games as $game) {
            $events[] = $this->buildEventFromGame($game);
        }
        $this->response($events);
    }

    public function varsity_get()
    {

        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames('Varsity');
        $events = array();

        foreach ($games as $game) {
            $events[] = $this->buildEventFromGame($game);
        }
        $this->response($events);
    }

    private function buildEventFromGame($game)
    {
        $title = ($game['location'] == 'Rosemont Ridge MS') ?
            'vs ' . $game['opponent'] : '@' . $game['opponent'];

        $start = $game['date'];
        $allDay = false;

        return  array(
            'type' => 'game',
            'title' => $title,
            'start' => $start,
            'allDay' => $allDay
        );
    }
}

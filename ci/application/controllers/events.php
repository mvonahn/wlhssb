<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once('/home1/webfootd/www/westlinnsoftball/ci/application/libraries/REST_Controller.php');

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

    public function team_get()
    {
        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-04T15:30',
            'end' => '2014-02-04T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Spring Sports Clearance',
            'start' => '2014-02-05T15:30',
            'end' => '2014-02-05T16:00',
            'allDay' => false,
            'color' => 'red'
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Kick Boxing',
            'start' => '2014-02-06T15:30',
            'end' => '2014-02-06T16:30',
            'allDay' => false
        );

        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-11T15:30',
            'end' => '2014-02-11T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-12T15:30',
            'end' => '2014-02-12T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Kick Boxing',
            'start' => '2014-02-13T15:30',
            'end' => '2014-02-13T16:30',
            'allDay' => false
        );

        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-18T15:30',
            'end' => '2014-02-18T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-19T15:30',
            'end' => '2014-02-19T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Kick Boxing',
            'start' => '2014-02-20T15:30',
            'end' => '2014-02-20T16:30',
            'allDay' => false
        );

        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-25T15:30',
            'end' => '2014-02-25T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Contidioning',
            'start' => '2014-02-26T15:30',
            'end' => '2014-02-26T16:30',
            'allDay' => false
        );
        $events[] = array(
            'id' => 99,
            'title' => 'Kick Boxing',
            'start' => '2014-02-27T15:30',
            'end' => '2014-02-27T16:30',
            'allDay' => false
        );
        $this->response($events);
    }

    public function jv_get()
    {

        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames('jv');
        $events = array();

        foreach ($games as $game) {
            $events[] = $this->buildEventFromGame($game);
        }
        $this->response($events);
    }

    public function varsity_get()
    {

        $this->load->model('Game_model', '', true);

        $games = $this->Game_model->getGames('varsity');
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

        list($month, $day, $year) = explode('/', $game['date']);
        $day = ($day>9)? $day : '0' . $day;
        $month = ($month>9)? $month : '0' . $month;
        list($time, $indicator) = explode(' ', $game['time']);
        if ($time != 'TBA') {
            list($hour, $min) = explode(':', $time);
            if ($indicator == 'PM' && $hour != 12) {
                $hour += 12;
            }
            $start = $year . '-' . $month . '-' . $day . 'T'. $hour . ':' . $min;
            $allDay = false;
        } else {
            $start = $year . '-' . $month . '-' . $day;
            $allDay = true;
        }

        return  array(
            'type' => 'game',
            'title' => $title,
            'start' => $start,
            'allDay' => $allDay
        );
    }
}

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

    public function getEvents($start = null, $end = null)
    {
        $events = array();
        $sql =
<<<EOSQL
SELECT
    *
FROM
    Event
WHERE
    1 = 1
EOSQL;
        if ($start != null) {
            $sql .= " AND Start >= from_unixtime($start)";
        }

        if ($end != null) {
            $sql .= " AND End <= from_unixtime($end)";
        }

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $events[] = array(
                'id' => $row->GroupId,
                'title' => $row->Title,
                'start' => $row->Start,
                'end' => $row->End,
                'allDay' => ($row->isAllDay),
                'color' => $row->color
            );
        }
        return $events;

    }

    public function getUpcomingEvents()
    {
        $events = array();
        $sql =
<<<EOSQL
SELECT
    Title,
    Start as ts
FROM
    Event
WHERE
    End > Now()
Union All
SELECT
    Concat(Team.Name, ' vs ', OpponentName, ' @', Location) as Title,
    Scheduled as ts
FROM
    Game,
    Team
WHERE
    TeamId = Team.Id
ORDER by ts
LIMIT 10
EOSQL;

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $events[] = array(
                'date' => $row->ts,
                'title' => $row->Title
            );
        }
        return $events;
    }
}

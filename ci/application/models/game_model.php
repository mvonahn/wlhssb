<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Contact_model
 */
class Game_model extends CI_Model
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        log_message('debug', 'WLHSSB: Game Model loaded');
    }

    /**
     * @param string $team
     * @return array
     */
    public function getGames($team = 'Varsity')
    {
        $games = array();
        $sql =
<<<EOSQL
Select * from Game
where TeamId = (Select Id from Team where Name = '$team')
order by Scheduled
EOSQL;

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $games[] = array(
                'date' => $row->Scheduled,
                'opponent' => $row->OpponentName,
                'level' => $team,
                'location' => $row->Location,
                'isLeague' => $row->isLeague,
                'isHome' => $row->isHome,
                'comment' => $row->Comment,
                'result' => $row->Result,
                'score' => $row->TeamScore . ' - ' . $row->OpponentScore,
            );
        }
        return $games;
    }
}

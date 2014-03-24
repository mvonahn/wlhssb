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

    public function getRecord($team = 'Varsity')
    {
        $record = array();

        $record['wins'] = $this->getGameCount($team, 'W', false);
        $record['losses'] = $this->getGameCount($team, 'L', false);
        $record['leagueWins'] = $this->getGameCount($team, 'W', true);
        $record['leagueLosses'] = $this->getGameCount($team, 'L', true);

        return $record;
    }

    private function getGameCount($team, $type, $leagueOnly)
    {
        $sql =
<<<EOSQL
Select count(*) as gameCount from Game
where TeamId = (Select Id from Team where Name = '$team')
And result = '$type'
EOSQL;
        if ($leagueOnly) {
            $sql .= "\n" . 'And isLeague = 1';
        }

        $query = $this->db->query($sql);
        $row = $query->row();
        return  $row->gameCount;
    }
}

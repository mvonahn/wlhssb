<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Contact_model
 */
class Coach_model extends CI_Model
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        log_message('debug', 'WLHSSB: Coach Model loaded');
    }

    /**
     * @param string $team
     * @return array
     */
    public function getCoaches($team = null)
    {
        $games = array();
        $teamWhere = '';
        if ($team != null) {
            $teamWhere = 'And Team.Name = "' . $team . '"';
        }

        $sql =
<<<EOSQL
Select
    Person.*,
    Name as TeamName,
    Title
from
    Coaches,
    Person,
    CoachType,
    Team
WHERE
    TeamId = Team.Id
    AND PersonId = Person.Id
    AND CoachType.Id = CoachTypeId
    $teamWhere
ORDER BY
    TeamId, CoachTypeId, FirstName;
EOSQL;

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $games[] = $row;
        }
        return $games;
    }
}

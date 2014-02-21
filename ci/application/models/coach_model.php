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
    public function getCoaches($team = 'Varsity')
    {
        $games = array();
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
ORDER BY
    TeamId, CoachTypeId, LastName;
EOSQL;

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $games[] = $row;
        }
        return $games;
    }
}

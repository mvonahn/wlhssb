<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Contact_model
 */
class Roster_model extends CI_Model
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        log_message('debug', 'CCT: Game Model loaded');
    }

    /**
     * @param $teamId
     * @return array
     */
    public function getRoster($teamId)
    {

        $roster = array();
        $sql =
<<<EOSQL
Select
    FirstName,
    LastName,
    Position,
    Number,
    Year
FROM
    Person,
    TeamPlayer
WHERE
    TeamId = $teamId
AND
    PersonId = Person.Id
ORDER BY LastName
EOSQL;

        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $roster[] = array(
                'FirstName' => $row->FirstName,
                'LastName' => $row->LastName,
                'Number' => $row->Number,
                'position' => $row->Position,
                'year' => $row->Year
            );
        }
        return $roster;
    }
}
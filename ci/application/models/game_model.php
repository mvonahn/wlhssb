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
        log_message('debug', 'CCT: Game Model loaded');
    }

    /**
     * @return array
     */
    public function getGames()
    {
        $game[] = array(
            'date' => '3/17/2014',
            'day' => 'Mon',
            'opponent' => 'Putnam HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '3/20/2014',
            'day' => 'Thurs',
            'opponent' => 'Aloha HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '3/21/2014',
            'day' => 'Fri',
            'opponent' => 'Forest Grove HS',
            'level' => 'JV',
            'location' => 'Forest Grove HS',
            'time' => '4:30 PM'
        );
        $game[] = array(
            'date' => '4/1/2014',
            'day' => 'Tues',
            'opponent' => 'Barlow HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/2/2014',
            'day' => 'Weds',
            'opponent' => 'Liberty HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/4/2014',
            'day' => 'Fri',
            'opponent' => 'Southridge HS',
            'level' => 'JV',
            'location' => 'Southridge HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/7/2014',
            'day' => 'Mon',
            'opponent' => 'Tualatin HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/9/2014',
            'day' => 'Weds',
            'opponent' => 'Wilsonville HS',
            'level' => 'JV',
            'location' => 'Wilsonville HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/10/2014',
            'day' => 'Thurs',
            'opponent' => 'Beaverton HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/14/2014',
            'day' => 'Mon',
            'opponent' => 'Oregon City HS',
            'level' => 'JV',
            'location' => 'Oregon City HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/16/2014',
            'day' => 'Weds',
            'opponent' => 'Canby HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/18/2014',
            'day' => 'Fri',
            'opponent' => 'Lake Oswego HS',
            'level' => 'JV',
            'location' => 'Lake Oswego',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/21/2014',
            'day' => 'Mon',
            'opponent' => 'Clackamas HS',
            'level' => 'JV',
            'location' => 'Clackamas HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/23/2014',
            'day' => 'Weds',
            'opponent' => 'Lakeridge HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/25/2014',
            'day' => 'Fri',
            'opponent' => 'Oregon City HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '4/28/2014',
            'day' => 'Mon',
            'opponent' => 'Canby HS',
            'level' => 'JV',
            'location' => 'Canby HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/30/2014',
            'day' => 'Weds',
            'opponent' => 'Lake Oswego HS',
            'level' => 'JV',
            'location' => 'Lake Oswego HS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '5/2/2014',
            'day' => 'Fri',
            'opponent' => 'Clackamas HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '5/5/2014',
            'day' => 'Mon',
            'opponent' => 'Lakeridge HS',
            'level' => 'JV',
            'location' => 'Lake Oswego Jr High',
            'time' => '4:30 PM'
        );
        $game[] = array(
            'date' => '5/7/2014',
            'day' => 'Weds',
            'opponent' => 'Oregon City HS',
            'level' => 'JV',
            'location' => 'Oregon City HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '5/9/2014',
            'day' => 'Fri',
            'opponent' => 'Canby HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '5/12/2014',
            'day' => 'Mon',
            'opponent' => 'Lake Oswego',
            'level' => 'JV',
            'location' => 'Lake Oswego',
            'time' => '5:00 5:00'
        );
        $game[] = array(
            'date' => '5/14/2014',
            'day' => 'Weds',
            'opponent' => 'Clackamas HS',
            'level' => 'JV',
            'location' => 'Clackamas HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '5/16/2014',
            'day' => 'Fri',
            'opponent' => 'Lakeridge HS',
            'level' => 'JV',
            'location' => 'Rosemont Ridge MS',
            'time' => '4:15 PM'
        );
        $game[] = array(
            'date' => '3/17/2014',
            'day' => 'Mon',
            'opponent' => 'Putnam HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '3/20/2014',
            'day' => 'Thurs',
            'opponent' => 'Aloha HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '3/21/2014',
            'day' => 'Fri',
            'opponent' => 'Forest Grove HS',
            'level' => 'Var',
            'location' => 'Forest Grove HS',
            'time' => '4:30 PM'
        );
        $game[] = array(
            'date' => '4/1/2014',
            'day' => 'Tues',
            'opponent' => 'Barlow HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/2/2014',
            'day' => 'Weds',
            'opponent' => 'Liberty HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/4/2014',
            'day' => 'Fri',
            'opponent' => 'Southridge HS',
            'level' => 'Var',
            'location' => 'Southridge HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/7/2014',
            'day' => 'Mon',
            'opponent' => 'Tualatin HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/9/2014',
            'day' => 'Weds',
            'opponent' => 'Wilsonville HS',
            'level' => 'Var',
            'location' => 'Wilsonville HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/10/2014',
            'day' => 'Thurs',
            'opponent' => 'Beaverton HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/14/2014',
            'day' => 'Mon',
            'opponent' => 'Oregon City HS',
            'level' => 'Var',
            'location' => 'Oregon City HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/16/2014',
            'day' => 'Weds',
            'opponent' => 'Canby HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/18/2014',
            'day' => 'Fri',
            'opponent' => 'Lake Oswego HS',
            'level' => 'Var',
            'location' => 'Lake Oswego',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/21/2014',
            'day' => 'Mon',
            'opponent' => 'Clackamas HS',
            'level' => 'Var',
            'location' => 'Clackamas HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/23/2014',
            'day' => 'Weds',
            'opponent' => 'Lakeridge HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/25/2014',
            'day' => 'Fri',
            'opponent' => 'Oregon City HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '4/28/2014',
            'day' => 'Mon',
            'opponent' => 'Canby HS',
            'level' => 'Var',
            'location' => 'Canby HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '4/30/2014',
            'day' => 'Weds',
            'opponent' => 'Lake Oswego HS',
            'level' => 'Var',
            'location' => 'Lake Oswego HS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '5/2/2014',
            'day' => 'Fri',
            'opponent' => 'Clackamas HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '5/5/2014',
            'day' => 'Mon',
            'opponent' => 'Lakeridge HS',
            'level' => 'Var',
            'location' => 'Lakeridge HS',
            'time' => '6:00 PM'
        );
        $game[] = array(
            'date' => '5/7/2014',
            'day' => 'Weds',
            'opponent' => 'Oregon City HS',
            'level' => 'Var',
            'location' => 'Oregon City HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '5/9/2014',
            'day' => 'Fri',
            'opponent' => 'Canby HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '5/12/2014',
            'day' => 'Mon',
            'opponent' => 'Lake Oswego',
            'level' => 'Var',
            'location' => 'Lake Oswego',
            'time' => '5:00 5:00'
        );
        $game[] = array(
            'date' => '5/14/2014',
            'day' => 'Weds',
            'opponent' => 'Clackamas HS',
            'level' => 'Var',
            'location' => 'Clackamas HS',
            'time' => '5:00 PM'
        );
        $game[] = array(
            'date' => '5/16/2014',
            'day' => 'Fri',
            'opponent' => 'Lakeridge HS',
            'level' => 'Var',
            'location' => 'Rosemont Ridge MS',
            'time' => '6:30 PM'
        );
        $game[] = array(
            'date' => '5/20/2014',
            'day' => 'Tues',
            'opponent' => 'Play in Game',
            'level' => 'Var',
            'location' => 'TBA',
            'time' => 'TBA TBA'
        );
        return $game;
    }
}

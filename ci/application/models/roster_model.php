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
     * @return array
     */
    public function getRoster()
    {
 //       Seniors:
        $player[] = array(
            'name'=> 'Brianna Barzola (Team Captain)', 'position'=> 'CF', 'year'=> '2013', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Lenaya LeBlanc', 'position'=> '1B', 'year'=> '2013', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Katie Wells', 'position'=> '1B', 'year'=> '2013', 'team'=> 'Varsity');
//        Juniors:
        $player[] = array(
            'name'=> 'Halle Olmstead', 'position'=> '3B', 'year'=> '2014', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Leah Beyer', 'position'=> 'SS', 'year'=> '2014', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'McKenzie Hartdegen', 'position'=> 'C', 'year'=> '2014', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'MacKenzie Baker', 'position'=> 'P', 'year'=> '2014', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Danielle DelBene', 'position'=> 'C/OF', 'year'=> '2014', 'team'=> 'Varsity');
        //       Sophomores:
        $player[] = array(
            'name'=> 'Maddi Higgins', 'position'=> 'RF', 'year'=> '2015', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Caroline Frieling', 'position'=> 'C/1B', 'year'=> '2015', 'team'=> 'Varsity');
        //       Freshmen:
        $player[] = array(
            'name'=> 'Hannah Sicilliani', 'position'=> '2B', 'year'=> '2016', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Sarah Von Ahn', 'position'=> 'P', 'year'=> '2016', 'team'=> 'Varsity');
        $player[] = array(
            'name'=> 'Carly Savoy', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'Varsity');

        //       2013 JV Roster
//Juniors:
        $player[] = array(
            'name'=> 'Leandra King*', 'position'=> 'INF', 'year'=> '2014', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Kalee Craddock', 'position'=> 'UTIL', 'year'=> '2014', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Kenani Waslik', 'position'=> 'UTIL', 'year'=> '2014', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Emily Johnson', 'position'=> 'OF', 'year'=> '2014', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Hannah Hilton', 'position'=> 'OF', 'year'=> '2014', 'team'=> 'JV');
//SOPHOMORES
        $player[] = array(
            'name'=> 'Sam Brumgardt', 'position'=> 'OF', 'year'=> '2015', 'team'=> 'JV');
//FRESHMEN:
        $player[] = array(
            'name'=> 'Ireland Bell', 'position'=> '2B', 'year'=> '2016', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Lauren Bell', 'position'=> 'P/1B', 'year'=> '2016', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Olyvia Soyk', 'position'=> 'UTIL', 'year'=> '2016', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Kamelah Noel', 'position'=> 'UTIL', 'year'=> '2016', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Aubrey Kreamer', 'position'=> '1B/OF', 'year'=> '2016', 'team'=> 'JV');
        $player[] = array(
            'name'=> 'Brittany Park', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'JV');


        //JV2
        $player[] = array(
            'name'=> 'Gillian White', 'position'=> 'C', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Heather Landerfeld', 'position'=> 'C/OF', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Maddie Montgomery', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Chelsea Parker', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Emily Jordan', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Shreya Nathan', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'JV2');
        $player[] = array(
            'name'=> 'Sierra Anderson', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'JV2');

        return $player;
    }
}
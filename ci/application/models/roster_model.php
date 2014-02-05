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
    public function getRoster($team)
    {
 //       Seniors:
        $varsity[] = array(
            'name'=> 'Brianna Barzola (Team Captain)', 'position'=> 'CF', 'year'=> '2013', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Lenaya LeBlanc', 'position'=> '1B', 'year'=> '2013', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Katie Wells', 'position'=> '1B', 'year'=> '2013', 'team'=> 'varsity');
//        Juniors:
        $varsity[] = array(
            'name'=> 'Halle Olmstead', 'position'=> '3B', 'year'=> '2014', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Leah Beyer', 'position'=> 'SS', 'year'=> '2014', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'McKenzie Hartdegen', 'position'=> 'C', 'year'=> '2014', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'MacKenzie Baker', 'position'=> 'P', 'year'=> '2014', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Danielle DelBene', 'position'=> 'C/OF', 'year'=> '2014', 'team'=> 'varsity');
        //       Sophomores:
        $varsity[] = array(
            'name'=> 'Maddi Higgins', 'position'=> 'RF', 'year'=> '2015', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Caroline Frieling', 'position'=> 'C/1B', 'year'=> '2015', 'team'=> 'varsity');
        //       Freshmen:
        $varsity[] = array(
            'name'=> 'Hannah Sicilliani', 'position'=> '2B', 'year'=> '2016', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Sarah Von Ahn', 'position'=> 'P', 'year'=> '2016', 'team'=> 'varsity');
        $varsity[] = array(
            'name'=> 'Carly Savoy', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'varsity');

        //       2013 jv Roster
//Juniors:
        $jv[] = array(
            'name'=> 'Leandra King*', 'position'=> 'INF', 'year'=> '2014', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Kalee Craddock', 'position'=> 'UTIL', 'year'=> '2014', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Kenani Waslik', 'position'=> 'UTIL', 'year'=> '2014', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Emily Johnson', 'position'=> 'OF', 'year'=> '2014', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Hannah Hilton', 'position'=> 'OF', 'year'=> '2014', 'team'=> 'jv');
//SOPHOMORES
        $jv[] = array(
            'name'=> 'Sam Brumgardt', 'position'=> 'OF', 'year'=> '2015', 'team'=> 'jv');
//FRESHMEN:
        $jv[] = array(
            'name'=> 'Ireland Bell', 'position'=> '2B', 'year'=> '2016', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Lauren Bell', 'position'=> 'P/1B', 'year'=> '2016', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Olyvia Soyk', 'position'=> 'UTIL', 'year'=> '2016', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Kamelah Noel', 'position'=> 'UTIL', 'year'=> '2016', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Aubrey Kreamer', 'position'=> '1B/OF', 'year'=> '2016', 'team'=> 'jv');
        $jv[] = array(
            'name'=> 'Brittany Park', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'jv');


        //jv2
        $jv2[] = array(
            'name'=> 'Gillian White', 'position'=> 'C', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Heather Landerfeld', 'position'=> 'C/OF', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Maddie Montgomery', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Chelsea Parker', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Emily Jordan', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Shreya Nathan', 'position'=> 'INF', 'year'=> '2016', 'team'=> 'jv2');
        $jv2[] = array(
            'name'=> 'Sierra Anderson', 'position'=> 'OF', 'year'=> '2016', 'team'=> 'jv2');

        return $$team;
    }
}
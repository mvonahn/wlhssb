<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Contact_model
 */
class Post_model extends CI_Model
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        log_message('debug', 'CLUBHOUSE: Post Model loaded');
    }


    public function getPosts($limit = 5, $offset = 0)
    {
        if($_SERVER['HTTP_HOST'] == 'westlinnsoftball.webfootdesigns.com')
        {
        $post = array (
            array(
                    'Id' => '1',
                    'Title' => 'Spring Sports Clearance:',
                    'Content' => '<p>All students interested in participating in a Baseball, Softball, Track, Tennis, Golf or Lacrosse must go through Spring Clearance on Wednesday, Feb. 5th, 2014 from 1:00 â€“ 4:00.  This is a early release day!</p>

                <p>The following items must be on file in the athletic office:</p>
                <ul>
                    <li>Physical form(if done in the past 2 years) - forms available online and at the athletic office</li>
                    <li>Emergency Form - available in the athletic office</li>
                    <li>Training Rules Form - available online and at the athletic office</li>
                    <li>Transportation Form â€“ available online and at the athletic office</li>
                    <li>Bookroom Clearance Form - Athletic fees plus any outstanding bookroom fees must be paid</li>
                    <li>All information and forms are available on the <a target="_blank" href ="http://www.wlhs.wlwv.k12.or.us/site/Default.aspx?PageID=3194">website</a>.</li>
                </ul>
                <p><b>****REMINDER Students who participated in a fall or winter sport this year should have all forms already on file.  In this case all that needs to be taken care of are bookroom fees and attend clearance at your sports designated time. *****</b></p>

                <p>Additional requirements for clearance:  Athletes must be enrolled in 5 classes and must be passing 5 classes and be making adequate progress toward graduation (see Training Rules Form). Once 1st Semester grades are posted if a student does not meet the academic requirement, they will not be eligible to participate.</p>

                <p>Here is the schedule for clearance afternoon:<br />
                    1:00 Lacrosse - Boys<br />
                    1:30 Lacrosse - Girls  <br />
                    2:00 Track - Boys and Girls  <br />
                    2:30 Tennis - Boys & Girls<br />
                    3:00 Baseball            <br />
                    3:30 Softball          <br />
                    4:00 Golf (Boys & Girls)</p>
     <p> ******IF YOU CANNOT MAKE THESE DATES the next Clearance dates will be Feb. 26, 27, 28 before school, during lunch and breaks and after school until 4:00.   The athletic office will be closed March 3, 2014 which is the first day of spring tryouts/practices *****</p>
',
                    'TypeId' => NULL,
                    'Date' => '2014-01-22 00:00:00',
                    'KeepOnTop' => NULL,
                ),
            array(
                    'Id' => '2',
                    'Title' => 'Softball Conditioning',
                    'Content' => '<p>We will begin a series of conditioning classes on Tuesday, February 4, at 3:30 pm. Meet at the Dance Room downstairs across from the weight room.</p>
<p>The classes will be every Tuesday, Wednesday, Thursday through the entire month of February, from 3:30 - 4:30 pm. Wear general work out clothes and tennis shoes. Mrs. Sherry Bell will be leading us through a variety of stretching, running, and flexibility training. Again, this is all preparation for our March 3 start, which will be high-paced, rigorous, and competitive. I would encourage you to attend to best ready yourself for this challenge.</p>
',
                    'TypeId' => NULL,
                    'Date' => '2014-01-15 00:00:00',
                    'KeepOnTop' => NULL,
                ),
        );

        return $post;
        }
        $post = array();
        $sql = 'Select * from Post order by Date Desc limit ' . $offset . ', ' . $limit;
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $post[] = $row;
        }
        return $post;
    }

    /**
     * @param $data
     */
    public function savePost($data)
    {
        $this->db->where('id', $data->Id);
        unset($data->Id);
        $this->db->update('Post', $data);

        return $this->db->affected_rows();
    }

    /**
     * @param $data
     */
    public function addPost($data)
    {
        $this->db->insert('Post', $data);
        return $this->db->affected_rows();
    }
}

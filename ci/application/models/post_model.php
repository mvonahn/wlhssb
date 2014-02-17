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

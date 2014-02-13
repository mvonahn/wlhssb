<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once(APPPATH . '/libraries/REST_Controller.php');

/**
 * Class University
 */
class Post extends REST_Controller
{
    public function index_get()
    {
        $this->load->model('Post_model', '', true);

        $posts = $this->Post_model->getPosts();

        $this->response($posts);
    }
}
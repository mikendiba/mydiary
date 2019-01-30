<?php
class Posts extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('posts_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['posts'] = $this->posts_model->get_posts();
                $data['title'] = 'My Diary Posts';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['posts_item'] = $this->posts_model->get_posts($slug);

        if (empty($data['posts_item']))
        {
                show_404();
        }

        $data['title'] = $data['posts_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
        }
        public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a new diary post';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('posts/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->posts_model->set_posts();
        $this->load->view('posts/success');
    }
}
       
}

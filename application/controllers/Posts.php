<?php
class Posts extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('posts_model');
                $this->load->helper('url_helper');
        }

        // public function index()
        // {
        //         $data['posts'] = $this->posts_model->get_posts();
        //         $data['title'] = 'My Diary Posts';

        // $this->load->view('templates/header', $data);
        // $this->load->view('posts/index', $data);
        // $this->load->view('templates/footer');
        // }

        public function view($slug = NULL)
        {
                $data['posts_item'] = $this->posts_model->get_posts($slug);

        if (empty($data['posts_item']))
        {
                show_404();
        }

        $data['title'] = $data['posts_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
        }
        public function create()
{
    $config['upload_path'] = './assets/uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '';
    $config['max_height']  = '';
    $config['overwrite'] = TRUE;
    $config['remove_spaces'] = TRUE;

$post_image_upload = "";

    $this->load->helper('form');

    $this->load->library('form_validation');

    $this->load->library('upload');
    
    $this->upload->initialize($config);

    $upload_result = $this->upload->do_upload('post_image');

    


   

    $data['title'] = 'Create a new diary post';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');


    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
        $this->load->view('posts/create');
        $this->load->view('templates/footer');
    if (! $upload_result) {
        echo "Failed to upload!";
    }
    else
    {
        $upload_data - $this->upload->data();

        $post_image_upload = $config['upload_path']."/".$upload_data['file_name'];

    }

    }
    else
    {

        $this->posts_model->set_posts($post_image_upload);
        $this->load->view('posts/success');
    }
}

       
}

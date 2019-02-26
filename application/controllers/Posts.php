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
 
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                $data['title'] = 'Create a new diary post';
    

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
        $this->load->view('posts/create');
        $this->load->view('templates/footer');
    }
    else
    {
 

        $this->posts_model->set_posts($data);
        $this->load->view('posts/success');
    }
}
public function delete()
        {
$data['posts'] = $this->posts_model->get_posts();
$data['title'] = 'Delete diary posts';
 // $data['posts_item'] = $this->posts_model->get_posts($slug);



        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
        $this->load->view('posts/delete', $data);
        $this->load->view('templates/footer');
        }
public function delete_post()

    {  
       
    $data['title'] = "Delete a post";

    $this->load->helper('file');


$query =  $this->posts_model->delete_posts($data); 

  if ($query) 
  {
          $this->load->view('posts/delete_success');
      }
   else
   {
  
       $this->load->view('posts/failure');
  
   }
    


     
    // $view_name = 'posts/delete';

    //   $path_finder=APPPATH.'views/'.$view_name.'.php';
    // if(file_exists($path_finder)){
    //      echo $path_finder;
    // }

    

// if($path_finder){
//   echo $path_finder;
// }
// else{
//   echo "Not Found";
// }

// $aDataTableDetailHTML = array();
// $aTempData = array();
  // $htmlContent = file_get_contents($path_finder);
    
  // $DOM = new DOMDocument();
  // $DOM->loadHTML($htmlContent);
  
  // $Header = $DOM->getElementsByTagName('th');
  // $Detail = $DOM->getElementsByTagName('td');
  // //#Get header name of the table
  //   foreach($Header as $NodeHeader) 
  //   {
  //       $aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
  //   }
  //   print_r($aDataTableHeaderHTML); die();
         
  }




       
}

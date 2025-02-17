<?php 

class Article extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        
    }

    public function index()
    {
        $data['meta'] = [
            'title' => 'Article Page 🚀'
        ];
        $data['articles'] = $this->article_model->get_published();
        if (count($data['articles']) > 0) {
            $this->load->view('articles/list_article.php', $data);
        } else {
            $this->load->view('articles/empty_article.php');
        }
    }

    public function show($slug = null) 
    {
        if (!$slug) {
            show_404();
        }
        
        $data['article'] = $this->article_model->find_by_slug($slug);
        if(!$data['article']){
            show_404();
        }

        $this->load->view('articles/show_article', $data);
    }

}
<?php
class Feed extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('posts_model');
    $this->config->set_item('banner', 'Global News Banner');


  }

  public function index()
  {  /*
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News archive';

    $this->load->view('news/index', $data);
    */
    $data['feed'] = $this->posts_model->get_feed();
    $data['title'] = 'Rss Feed';

    $this->load->view('feed/index', $data);


}


}

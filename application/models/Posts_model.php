<?php
class Posts_model extends CI_Model{

public function get_feed() {
  $request = "http://rss.news.yahoo.com/rss/software";//model
  $response = file_get_contents($request);
  $data['xml'] = simplexml_load_string($response);//model
  return $data['xml'];

}

}

<?php

/**
* Customer.php controller for a generic customer
*
* Use to show how to do crud in codeigniter
*
* @package LARGE_PIECE_OF_PROGRAM
* @subpackage Customer
* @author Evan Smyth <evsmyth@yahoo.com>
* @version 1.0 2015/04/30
* @link http://www.example.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see index.php
* @todo none
*/


/**
* Customer controller for our crud demo
* mores stuff about the class
*<code>
*code sample goes here
*</code>
* @see Customer_model.php
* @todo none
*/
class Customer extends CI_Controller {

  /**
  * Loads default data into object
  *
  *
  * @param none
  * @return void
  * @todo none
  */
  public function __construct()
  {
    parent::__construct();
      $this->load->model('customer_model');
    $this->config->set_item('banner', 'Global Customer Banner');


  }//End constructor()


  /**
  * Shows initial Customer Database data
  * Added in v3 - Result object
  * @param none
  * @return void
  * @todo none
  */
  public function index()
  {

    $data['query'] = $this->customer_model->get_customers();
  //  var_dump($data);
  //  die;

    $data['title'] = 'Customer';

    $this->load->view('customer/index', $data);


  }


}

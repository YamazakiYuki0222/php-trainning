<?php 

class client {
  public $client_name;
  public $client_info;

  public function __construct() {
    $param = $_GET['name'];
    if ($param == 'field') {
      $info['members'] = '15';
      $info['outsource'] = '10';
      $info['address'] = 'shinjyuku nakano';
      $info['sales'] = '500,000,000';
      $info['industry'] = 'IT';
    
    } elseif ($param == 'sova') {
      $info['members'] = '8';
      $info['outsource'] = '22';
      $info['address'] = 'shinnihonbashi';
      $info['sales'] = '20,000,000'; 
      $info['industry'] = 'Accounting';

    } else {
      $info['members'] = 'none';
      $info['outsource'] = 'none';
      $info['address'] = 'none';
      $info['sales'] = 'none'; 
      $info['industry'] = 'none';  
    
    }
    $this->client_name = $param;
    $this->client_info = $info;
 
  }
  public function get_client_name() {
    return $this->client_name;
  }
  public function get_client_members() {
    return $this->client_info['members'];
  }
  public function get_client_outsource() {
    return $this->client_info['outsource'];
  }
  public function get_client_address() {
    return $this->client_info['address'];
  }
  public function get_client_sales() {
    return $this->client_info['sales'];
  }
  public function get_client_industry() {
    return $this->client_info['industry'];
  }

  public function get_client_information(){
    return $this->get_client_name()."で、従業員数は".
      $this->get_client_members()."で、外注が".
      $this->get_client_outsource()."で、住所が".
      $this->get_client_address()."で、売上が".
      $this->get_client_sales()."で、業界が".
      $this->get_client_industry()."です。";
  
  }
}





?>

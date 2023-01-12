<?php 
class client {

  public $client_name;
  public $client_info;

  public function __construct() {
    $param = $_GET['name'];
    if ($param == 'field') {
      $ret['members'] = '15';
      $ret['address'] = 'kamiochiai';
      $ret['industry'] = 'IT';

    } elseif ($param == 'sova') {
      $ret['members'] = '10';
      $ret['address'] = '新日本橋';
      $ret['industry'] = 'Accounting';
      
    } else {
      $ret['members'] = 'none';
      $ret['address'] = 'none';
      $ret['industry'] = 'none';
    
    }

    $this->client_name = $param;
    $this->client_info = $ret;
  
  }
  public function get_client_name() {
    return $this->client_name;
  }
  public function get_client_members() {
    return $this->client_info['members'];
  }
  public function get_client_address() {
    return $this->client_info['address'];
  }
  public function get_client_industry() {
    return $this->client_info['industry'];
  }

  public function get_client_information() {
    return $this->get_client_name()."は、従業員が".
      $this->get_client_members()."で、住所が".
      $this->get_client_address()."で、業種が".
      $this->get_client_industry()."です。";
  
  }

}



?>

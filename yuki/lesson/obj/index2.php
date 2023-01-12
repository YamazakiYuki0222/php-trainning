<?php 
  $client = new client();
  
  class client {
    public $client_name;
    public $client_info;

    public function __construct() {
      $param = $_GET['name'];
      if ($param == 'field') {
        $ret['members'] = '15';
        $ret['outsource'] = '10';
        $ret['address'] = 'tokyo shinjyuku';
        $ret['sales'] = '500,000,000';
        $ret['industry'] = 'IT';
      
      } elseif ($param == 'sova') {
        $ret['members'] = '8';
        $ret['outsource'] = '12';
        $ret['address'] = 'tokyo shinnihonashi';
        $ret['sales'] = '20,000,000';
        $ret['industry'] = 'Accounting';
      
      } else {
        $ret['members'] = '8';
        $ret['outsource'] = '12';
        $ret['address'] = 'tokyo shinnihonashi';
        $ret['sales'] = '20,000,000';
        $ret['industry'] = 'Accounting';
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

    public function get_client_information() {
      return $this->get_client_name().'は、従業員数が'.
        $this->get_client_members().'で、業務委託が'.
        $this->get_client_outsource().'で、住所が'.
        $this->get_client_address().'で、売り上げが'.
        $this->get_client_sales().'で、業種が'.
        $this->get_client_industry().'です。';    
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?= $client->get_client_information(); ?>
</body>
</html>

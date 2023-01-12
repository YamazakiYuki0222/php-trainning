<?php
require_once('obj2_client.php');
$client = new client();


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


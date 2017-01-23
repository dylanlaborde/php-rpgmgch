<?php 

require "Client.php";

$client1 = new Client("1","lala");
$client2 = new Client("1","lala");

return [
  $client1,
  $client2
];


?>
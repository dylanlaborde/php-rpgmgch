<?php 

require __DIR__."/../Client.php";

$client1 = new Client("user1","user1@gmail.com");
$client2 = new Client("user2","user2@gmail.com");

return [
  ["client"=>$client1],
  ["client"=>$client2]
];


?>
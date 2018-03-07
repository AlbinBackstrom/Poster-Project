<?php 
$client = new SoapClient('http://tsb05.cnap.hv.se/Filmklubb_WS/Service1.svc?singleWsdl');
$result = $client->GetMovies();
echo json_encode($result);
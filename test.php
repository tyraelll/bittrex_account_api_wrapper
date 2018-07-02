<?php

	require __DIR__.'/src/Client.php';

	use bittrex\Client;

	$key = '';
	$secret = '';

	$b = new Client ($key, $secret);

    $test = $b->getBalance('Steem');
    $test = json_decode(json_encode($test),true);
    echo floatval($test["Balance"]);
	
	$ticker = json_decode(json_encode($b->getTicker("BTC-Steem")),true);
    echo '<br>'.floatval($ticker["Last"]);
	

?>

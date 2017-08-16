<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalController extends Controller
{
    //
    public function getUsers(){
    	$client = new \GuzzleHttp\Client();
		//$res = $client->request('GET', 'localhost:8000/apitest/public/getUsers');
		$res = $client->request('GET', 'hoteltest.co.nf/getUsers');
//echo $res->getStatusCode();
// 200
//echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
/*
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();
    }

    */
}
}

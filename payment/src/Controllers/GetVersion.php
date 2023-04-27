<?php

namespace Paywall\payment;

use GuzzleHttp\Client;

class GetVersion
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://dev-payment-api.itspaywall.com/api/paywall/payment/version',
            'timeout' => 2.0,
        ]);
    }

    public function GetVersion($url)
    {
        $response = $this->client->get($url);
        return $response->getBody()->getContents();
    }
}

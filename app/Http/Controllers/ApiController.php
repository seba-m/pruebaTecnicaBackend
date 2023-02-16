<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ApiController extends Controller
{
    /**
     * Returns the average price of a cryptocurrency.
     *
     * @param string $money The cryptocurrency to get the average price of.
     * @return string The average price of the cryptocurrency.
     */
    public function getMoneyPrice($money): string
    {
        $client = new Client();
        $response = $client->request('GET', "https://api.binance.com/api/v3/avgPrice?symbol=" . $money . "USDT");
        $data = json_decode($response->getBody(), true);
        $precioPromedio = $data['price'];

        return $precioPromedio;
    }
}

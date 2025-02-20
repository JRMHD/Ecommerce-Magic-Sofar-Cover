<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class ExchangeRateHelper
{
    public static function getKESRate()
    {
        try {
            $apiKey = '32f7771cd9f47e4b3212bc97'; // Your API key
            $url = "https://v6.exchangerate-api.com/v6/{$apiKey}/latest/USD";

            $response = Http::get($url)->json();

            if (isset($response['conversion_rates']['KES'])) {
                return $response['conversion_rates']['KES'];
            }

            return 130; // Default fallback if API fails
        } catch (\Exception $e) {
            return 130; // Default fallback
        }
    }
}

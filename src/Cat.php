<?php

namespace PavelGoroshnikov\SimpleApi;

use GuzzleHttp\Client;

class Cat
{
    const CAT_API_URI = 'https://catfact.ninja/fact';
    public function getFact()
    {
        $client = new Client([
            'base_uri' => static::CAT_API_URI,
            'timeout' => 2,
        ]);

        $response = $client->get(static::CAT_API_URI)->getBody()->getContents();
        try {
            $factArr = json_decode($response, false);
            $fact = $factArr->fact;
            if (!$fact) {
                throw new \Exception('Any error');
            }
        } catch (\Exception $ex) {
            $fact = 'No fact';
        }
        return $fact;
    }

}

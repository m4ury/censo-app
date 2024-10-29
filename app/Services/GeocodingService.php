<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeocodingService
{
    public function geocode($address)
    {
        $url = 'https://nominatim.openstreetmap.org/search';

        $response = Http::get($url, [
            'q' => $address,
            'format' => 'json',
            'addressdetails' => 1,
            'limit' => 1
        ]);

        if ($response->successful() && isset($response[0])) {
            return [
                'lat' => $response[0]['lat'],
                'lon' => $response[0]['lon'],
            ];
        }

        return null;
    }
}
    /* public function geocodeAddress($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json';
        $response = $this->client->get($url, [
            'query' => [
                'address' => $address,
                'key' => $this->apiKey
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        if ($data['status'] == 'OK') {
            $location = $data['results'][0]['geometry']['location'];
            return [
                'lat' => $location['lat'],
                'lng' => $location['lng']
            ];
        }

        return null;
    } */

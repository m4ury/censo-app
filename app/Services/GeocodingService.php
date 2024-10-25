<?php
namespace App\Services;

use GuzzleHttp\Client;

class GeocodingService
{
protected $client;
protected $apiKey;

public function __construct()
{
$this->client = new Client();
$this->apiKey = env('GOOGLE_MAPS_API_KEY');
}

/**
* Geocodificar una dirección para obtener latitud y longitud
*/
public function geocodeAddress($address)
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
}
}


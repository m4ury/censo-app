<?php

namespace App\Services;

use GuzzleHttp\Client;

class GeocodingService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Geocodificar dirección utilizando Nominatim (OpenStreetMap)
     * @param string $address
     * @return array|null
     */
    public function geocode($address)
    {
        // Formatear la dirección para la URL
        $url = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($address);

        // Realizar la solicitud a la API de Nominatim
        $response = $this->client->get($url, [
            'headers' => [
                'User-Agent' => 'LaravelGeocoder' // Nominatim requiere que se use un User-Agent válido
            ]
        ]);

        // Decodificar la respuesta JSON
        $data = json_decode($response->getBody(), true);

        // Verificar si se obtuvo una respuesta válida
        if (isset($data[0])) {
            return [
                'lat' => $data[0]['lat'],
                'lon' => $data[0]['lon']
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

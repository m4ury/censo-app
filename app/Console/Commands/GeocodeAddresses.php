<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Paciente;  // Modelo Paciente
use App\Services\GeocodingService;  // Servicio de geocodificación
use Illuminate\Support\Facades\Log;

class GeocodeAddresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geocode:addresses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Geolocaliza las direcciones de los pacientes y actualiza sus coordenadas';

    protected $geocodingService;


    public function __construct(GeocodingService $geocodingService)
    {
        parent::__construct();
        $this->geocodingService = $geocodingService;
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Obtener pacientes que aún no tienen coordenadas geográficas
        $paciente = new Paciente;
        $pacientes = $paciente->g3()
            ->select('id', 'direccion', 'comuna', 'rut')
            ->whereNull('egreso')
            ->whereNotNull('direccion')
            ->whereNotNull('comuna')
            ->whereNull('latitud')
            ->orWhereNull('longitud')
            ->limit(700)
            ->get();

        foreach ($pacientes as $paciente) {
            $address = $paciente->direccion;
            $coordinates = $this->geocodingService->geocode($paciente->direccion . ', ' . $paciente->comuna . ', Chile');


            if ($coordinates) {
                $paciente->latitud = $coordinates['lat'];
                $paciente->longitud = $coordinates['lon'];
                $paciente->save();
                $this->info("Geocodificado: {$paciente->rut} - {$address}");
            } else {
                Log::warning("No se pudo geocodificar la dirección: {$address}");
            }
        }

        $this->info("Geocodificación completada.");
    }
}

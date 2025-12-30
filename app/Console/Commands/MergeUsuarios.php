<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MergeUsuarios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usuarios:merge {rut_principal} {rut_duplicado}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unifica usuarios duplicados por RUT y consolida constancias y relaciones.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rutPrincipal = $this->argument('rut_principal');
        $rutDuplicado = $this->argument('rut_duplicado');

        $usuarioPrincipal = User::where('rut', $rutPrincipal)->first();
        $usuarioDuplicado = User::where('rut', $rutDuplicado)->first();

        if (!$usuarioPrincipal || !$usuarioDuplicado) {
            $this->error('Uno o ambos usuarios no existen.');
            return Command::FAILURE;
        }

        DB::transaction(function () use ($usuarioPrincipal, $usuarioDuplicado) {
            // Transfiere constancias
            DB::table('constancias')
                ->where('user_id', $usuarioDuplicado->id)
                ->update(['user_id' => $usuarioPrincipal->id]);

            // Aquí puedes agregar más transferencias de relaciones si es necesario

            // Elimina el usuario duplicado
            $usuarioDuplicado->delete();
        });

        $this->info("Usuario {$usuarioDuplicado->rut} consolidado en {$usuarioPrincipal->rut} y eliminado.");

        return Command::SUCCESS;
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use app\User;

class ResetUserPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:reset-password {rut} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resetea la contraseña de un usuario especificando su RUT';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rut = $this->argument('rut');
        $password = $this->argument('password');

        // Buscar el usuario por RUT
        $user = User::where('rut', $rut)->first();

        if (!$user) {
            $this->error("No se encontró un usuario con el RUT: $rut");
            return 1;
        }

        // Actualizar la contraseña
        $user->password = Hash::make($password);
        $user->save();

        $this->info("La contraseña del usuario con RUT $rut ha sido actualizada exitosamente.");
        return 0;
    }
}

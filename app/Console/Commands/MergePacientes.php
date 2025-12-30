<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MergePacientes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pacientes:merge {pacienteA_id} {pacienteB_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consolidar información de pacientes duplicados';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pacienteA_id = $this->argument('pacienteA_id');
        $pacienteB_id = $this->argument('pacienteB_id');

        DB::transaction(function () use ($pacienteA_id, $pacienteB_id) {
            // Transfiere los controles de A a B
            DB::table('controls')
                ->where('paciente_id', $pacienteA_id)
                ->update(['paciente_id' => $pacienteB_id]);

            // Transfiere las constancias de A a B (evita el error de FK)
            DB::table('constancias')
                ->where('paciente_id', $pacienteA_id)
                ->update(['paciente_id' => $pacienteB_id]);

            // Transfiere las patologías de A a B
            $patologiasA = DB::table('paciente_patologia')
                ->where('paciente_id', $pacienteA_id)
                ->pluck('patologia_id')
                ->toArray();

            $patologiasB = DB::table('paciente_patologia')
                ->where('paciente_id', $pacienteB_id)
                ->pluck('patologia_id')
                ->toArray();

            $nuevasPatologias = array_diff($patologiasA, $patologiasB);

            foreach ($nuevasPatologias as $patologia_id) {
                DB::table('paciente_patologia')->insert([
                    'paciente_id' => $pacienteB_id,
                    'patologia_id' => $patologia_id,
                ]);
            }

            // Elimina las relaciones en paciente_patologias del paciente A
            DB::table('paciente_patologia')->where('paciente_id', $pacienteA_id)->delete();

            // Elimina al paciente A
            DB::table('pacientes')->where('id', $pacienteA_id)->delete();
        });

        $this->info("Información consolidada y paciente $pacienteA_id eliminado.");

        return Command::SUCCESS;
    }
}

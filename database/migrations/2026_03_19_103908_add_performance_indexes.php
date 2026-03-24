<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Helper function to check if index exists
        $indexExists = function ($table, $indexName) {
            $indexes = DB::select("SHOW INDEX FROM $table WHERE Key_name = '$indexName'");
            return count($indexes) > 0;
        };

        // Pacientes table indexes
        Schema::table('pacientes', function (Blueprint $table) use ($indexExists) {
            // Single column indexes for frequent filters
            if (!$indexExists('pacientes', 'pacientes_riesgo_cv_index')) {
                $table->index('riesgo_cv');
            }
            if (!$indexExists('pacientes', 'pacientes_egreso_index')) {
                $table->index('egreso');
            }
            if (!$indexExists('pacientes', 'pacientes_sexo_index')) {
                $table->index('sexo');
            }
            if (!$indexExists('pacientes', 'pacientes_sector_index')) {
                $table->index('sector');
            }
            if (!$indexExists('pacientes', 'pacientes_fecha_nacimiento_index')) {
                $table->index('fecha_nacimiento');
            }
            if (!$indexExists('pacientes', 'pacientes_usoinsulina_index')) {
                $table->index('usoInsulina');
            }
        });

        // Controls table indexes
        Schema::table('controls', function (Blueprint $table) use ($indexExists) {
            // Single column indexes
            if (!$indexExists('controls', 'controls_tipo_control_index')) {
                $table->index('tipo_control');
            }
            if (!$indexExists('controls', 'controls_fecha_control_index')) {
                $table->index('fecha_control');
            }
            if (!$indexExists('controls', 'controls_evaluacionpie_index')) {
                $table->index('evaluacionPie');
            }
            if (!$indexExists('controls', 'controls_pa_menor_140_90_index')) {
                $table->index('pa_menor_140_90');
            }
            if (!$indexExists('controls', 'controls_pa_menor_150_90_index')) {
                $table->index('pa_menor_150_90');
            }
            if (!$indexExists('controls', 'controls_hba1cmenor7porcent_index')) {
                $table->index('hba1cMenor7Porcent');
            }
            if (!$indexExists('controls', 'controls_hba1cmenor8porcent_index')) {
                $table->index('hba1cMenor8Porcent');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $indexExists = function ($table, $indexName) {
            $indexes = DB::select("SHOW INDEX FROM $table WHERE Key_name = '$indexName'");
            return count($indexes) > 0;
        };

        Schema::table('pacientes', function (Blueprint $table) use ($indexExists) {
            if ($indexExists('pacientes', 'pacientes_riesgo_cv_index')) {
                $table->dropIndex(['riesgo_cv']);
            }
            if ($indexExists('pacientes', 'pacientes_egreso_index')) {
                $table->dropIndex(['egreso']);
            }
            if ($indexExists('pacientes', 'pacientes_sexo_index')) {
                $table->dropIndex(['sexo']);
            }
            if ($indexExists('pacientes', 'pacientes_sector_index')) {
                $table->dropIndex(['sector']);
            }
            if ($indexExists('pacientes', 'pacientes_fecha_nacimiento_index')) {
                $table->dropIndex(['fecha_nacimiento']);
            }
            if ($indexExists('pacientes', 'pacientes_usoinsulina_index')) {
                $table->dropIndex(['usoInsulina']);
            }
        });

        Schema::table('controls', function (Blueprint $table) use ($indexExists) {
            if ($indexExists('controls', 'controls_tipo_control_index')) {
                $table->dropIndex(['tipo_control']);
            }
            if ($indexExists('controls', 'controls_fecha_control_index')) {
                $table->dropIndex(['fecha_control']);
            }
            if ($indexExists('controls', 'controls_evaluacionpie_index')) {
                $table->dropIndex(['evaluacionPie']);
            }
            if ($indexExists('controls', 'controls_pa_menor_140_90_index')) {
                $table->dropIndex(['pa_menor_140_90']);
            }
            if ($indexExists('controls', 'controls_pa_menor_150_90_index')) {
                $table->dropIndex(['pa_menor_150_90']);
            }
            if ($indexExists('controls', 'controls_hba1cmenor7porcent_index')) {
                $table->dropIndex(['hba1cMenor7Porcent']);
            }
            if ($indexExists('controls', 'controls_hba1cmenor8porcent_index')) {
                $table->dropIndex(['hba1cMenor8Porcent']);
            }
        });
    }
};



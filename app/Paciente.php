<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class Paciente extends Model
{
    protected $guarded = ['id'];

    /*protected $fillable = ['rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sexo', 'telefono', 'direccion', 'fecha_nacimiento', 'comuna', 'migrante', 'pueblo_originario', 'compensado', 'riesgo_cv', 'erc', 'racVigente', 'vfgVigente', 'fondoOjoVigente', 'ecgVigente', 'ldlVigente'];*/

    public function fullName()
    {
        return ucfirst($this->nombres ?? "") . " " . ucfirst($this->apellidoP ?? "") . " " . ucfirst($this->apellidoM ?? "");
    }

    public function edad()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function EdadEnMeses()
    {
        if (Carbon::create($this->fecha_nacimiento)->age < 10) {
            return Carbon::parse($this->fecha_nacimiento)->diffInMonths(Carbon::now());
        } else
            return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function getEdadEnMesesAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->diffInMonths(Carbon::now());
    }

    public function getGrupoAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function interconsultas()
    {
        return $this->hasMany(Interconsulta::class);
    }

    public function constancias()
    {
        return $this->hasMany(Constancia::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    /* public function efams()
    {
        return $this->hasMany(Control::class);
    } */

    /* public function examenes()
    {
        return $this->hasMany(Examen::class);
    } */

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }

    public function patologias()
    {
        return $this->belongsToMany(Patologia::class)->withPivot('created_at');
    }

    public function naneas()
    {
        return $this->belongsToMany(Naneas::class)->withPivot('created_at');
    }

    public function scopeSearch($query, $q)
    {
        if ($q) return $query->where('sexo', 'LIKE', "%$q%")->orWhere('sector', 'LIKE', "%$q%");
    }

    //P4 seccion A

    public function rcv_bajo($fem = 'Femenino', $masc = 'Masculino', $grupo = [15, 120])
    {
        return $this->whereRiesgo_cv('BAJO')->whereNull("egreso")->whereIn('sexo', [$fem, $masc])->get()->whereBetween('grupo', $grupo);
    }

    public function rcv_mod()
    {
        return $this->whereRiesgo_cv('MODERADO')->whereNull("egreso");
    }

    public function rcv_alto()
    {
        return $this->whereRiesgo_cv('ALTO')->whereNull("egreso");
    }

    public function s_erc()
    {
        return $this->pscv()->whereErc('sin')->whereNull("egreso");
    }

    public function ercI()
    {
        return $this->pscv()->whereErc('I')->whereNull("egreso");
    }

    public function ercII()
    {
        return $this->pscv()->whereErc('II')->whereNull("egreso");
    }

    public function ercIIIa()
    {
        return $this->pscv()->whereErc('IIIA')->whereNull("egreso");
    }

    public function ercIIIb()
    {
        return $this->pscv()->whereErc('IIIB')->whereNull("egreso");
    }

    public function ercIV()
    {
        return $this->pscv()->whereErc('IV')->whereNull("egreso");
    }

    public function ercV()
    {
        return $this->pscv()->whereErc('V')->whereNull("egreso");
    }

    public function ercTotal()
    {
        return $this->pscv()->whereIn('erc', ['sin', 'I', 'II', 'IIIA', 'IIIB', 'IV', 'V'])->whereNull("egreso");
    }

    public function pscv()
    {
        return $this->whereNull('egreso')->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereNull("egreso");
    }

    public function hta($fem = 'Femenino', $masc = 'Masculino', $grupo = [15, 120])
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->whereIn('sexo', [$fem, $masc])
            ->where('patologias.nombre_patologia', 'HTA')
            ->get()
            ->whereBetween('grupo', $grupo);
    }

    public function dm2()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'DM2');
    }

    public function sm()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'SALUD MENTAL');
    }

    public function salaEra()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'SALA ERA');
    }

    //P6 seccion A
    public function trHumor($fem, $masc, $dep)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.trHumor', $dep)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function trConsumo($fem, $masc, $cons)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.trConsumo', $cons)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function trInfAdol($fem, $masc, $tr)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.trInfAdol', $tr)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function trAns($fem, $masc, $tr)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.trAns', $tr)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function demencias($fem, $masc, $dem)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.demencias', $dem)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function diagSm($fem, $masc, $diag)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.diagSm', $diag)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function trDesarrollo($fem, $masc, $tr)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Psicologo')
            ->where('controls.trDesarrollo', $tr)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P4 seccion A
    public function dlp()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            //->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'DLP');
    }

    public function iam()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'ANTECEDENTE IAM');
    }

    public function acv()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'ANTECEDENTE ACV');
    }

    public function tbq()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'TABAQUISMO');
    }

    //P3 seccion A
    public function epilepsia()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'EPILEPSIA');
    }

    public function glaucoma()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'GLAUCOMA');
    }

    public function parkinson()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'ENF. PARKINSON');
    }

    public function artrosis()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'ARTROSIS RODILLA Y/O CADERA');
    }

    public function alivio_dolor()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'ALIVIO DOLOR');
    }

    public function hipot()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'HIPOTIROIDISMO');
    }

    public function paliativo()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', '=', 'PALIATIVO UNIVERSAL');
    }

    public function demencia()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'DEMENCIA');
    }

    public function depSeveroDemencia()
    {
        return $this->demencia()
            ->where('pacientes.postrado', true);
    }

    //P4 seccion B Metaas de Compensacion
    public function pa140()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('paciente_patologia.patologia_id', '=', 1)
            ->where('controls.pa_menor_140_90', true)
            ->where('controls.tipo_control', 'Medico')
            ->whereNull('pacientes.egreso')
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function pa150()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('paciente_patologia.patologia_id', '=', 1)
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.pa_menor_150_90', true)
            ->whereNull('pacientes.egreso')
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function hbac17()
    {
        return $this->dm2()->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.hba1cMenor7Porcent', true)
            ->whereNull('pacientes.egreso')
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function hbac18()
    {
        return $this->dm2()
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.hba1cMenor8Porcent', true)
            ->whereNull('pacientes.egreso')
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function hbac17Pa140Ldl100()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.hba1cMenor7Porcent', true)
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.pa_menor_140_90', true)
            ->where('controls.ldlMenor100', true)
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function ldl100()
    {
        return $this->dm2()
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', '=', 'Medico')
            ->whereRiesgo_cv('ALTO')
            ->where('controls.ldlMenor100', '=', 1)
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function aspirinas()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            //->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'ANTECEDENTE ACV')
            ->where('pacientes.usoAspirinas', true);
    }

    public function estatinas()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            //->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'ANTECEDENTE IAM')
            ->where('pacientes.usoEstatinas', true);
    }

    public function fumador()
    {
        return $this->estatinas()
            ->whereNull('pacientes.egreso')
            ->where('patologias.nombre_patologia', 'TABAQUISMO');
    }

    //P4 seccion C Variables de seguimiento del PSCV al corte
    public function racVigente()
    {
        return $this->dm2()->where('racVigente', '>=', Carbon::now()->subYear(1));
        //return $this->dm2()->where('racVigente', '>=', Carbon::now()->subMonth(13));
        //return $this->dm2()->whereYear('racVigente', '<=', 2022);
    }

    public function vfgRacVigente()
    {
        return $this->vfgVigente()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->where('racVigente', '>=', Carbon::now()->subYear(1))
            );
        // ->where('racVigente', '>=', Carbon::now()->subYear(1)));
    }

    public function vfgVigente()
    {
        //return $this->dm2()->where('vfgVigente', '>=', Carbon::now()->subYear(1));
        return $this->dm2()->where('vfgVigente', '>=', Carbon::now()->subYear(1));
    }

    public function fondoOjoVigente()
    {
        return $this->dm2()->where('fondoOjoVigente', '>=', Carbon::now()->subYear(1));
    }

    public function controlPodologico_alDia()
    {
        return $this->dm2()->where('controlPodologico_alDia', '>=', Carbon::now()->subYear(1));
    }

    public function ecgVigente()
    {
        return $this->dm2()->where('ecgVigente', '>=', Carbon::now()->subYear(1));
    }

    public function usoInsulina()
    {
        return $this->dm2()->where('usoInsulina', true);
    }

    public function insulinaHba1C()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->where('paciente_patologia.patologia_id', 2)
            ->where('controls.hba1cMenor8Porcent', true)
            ->where('pacientes.usoInsulina', true)
            ->union(DB::table('pacientes')
                ->join('controls', 'controls.paciente_id', 'pacientes.id')
                ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
                ->where('paciente_patologia.patologia_id', 2)
                ->where('controls.hba1cMenor7Porcent', true)
                ->where('pacientes.usoInsulina', true));
    }


    public function hba1cMayorIgual9Porcent()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.hba1cMayorIgual9Porcent', true)
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function dm2Fumador()
    {
        return $this->dm2()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
                    ->where('paciente_patologia.patologia_id', 7)
            );
    }

    public function htaVfgRac()
    {
        return $this->htaVfgVigente()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->where('racVigente', '>=', Carbon::now()->subYear(1))
            );
    }

    public function htaVfgVigente()
    {
        //return $this->dm2()->where('vfgVigente', '>=', Carbon::now()->subYear(1));
        return $this->hta()->where('vfgVigente', '>=', Carbon::now()->subYear(1));
    }

    public function usoIecaAraII()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->where('paciente_patologia.patologia_id', 2)
            ->where('pacientes.usoIecaAraII', 1)
            ->whereIn('erc', ['IIIB', 'IV', 'V']);
    }

    public function ldlVigente()
    {
        return $this->where('ldlVigente', '>=', Carbon::now()->subYear(1));
    }


    //P5 seccion A
    public function efam()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereNotNull('controls.rEfam')
            ->whereYear('controls.fecha_control', 2024)
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function barthel()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereIn('controls.rBarthel', ['dMod', 'dLeve', 'dSevero', 'dTotal'])
            ->whereYear('controls.fecha_control', 2024)
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P4 seccion C
    public function evaluacionPie_bajo()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.evaluacionPie', 'Bajo')
            ->whereYear('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function evaluacionPie_moderado()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.evaluacionPie', 'Moderado')
            ->whereYear('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function evaluacionPie_alto()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.evaluacionPie', 'Alto')
            ->whereYear('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function evaluacionPie_maximo()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.evaluacionPie', 'Maximo')
            ->whereYear('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function evaluacionPie()
    {
        return $this->select('pacientes.id', 'pacientes.nombres', 'pacientes.apellidoM', 'pacientes.apellidoP', 'pacientes.rut', 'pacientes.ficha', 'patologias.nombre_patologia', 'controls.fecha_control', 'controls.evaluacionPie', 'pacientes.telefono')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->join('patologias', 'paciente_patologia.patologia_id', 'patologias.id')
            ->where('patologias.nombre_patologia', 'DM2')
            ->whereNull('pacientes.egreso')
            ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function dm2Descom()
    {
        return $this->pscv()->select('pacientes.id', 'pacientes.nombres', 'pacientes.apellidoM', 'pacientes.apellidoP', 'pacientes.rut', 'pacientes.ficha', 'patologias.nombre_patologia', 'controls.fecha_control', 'controls.hba1cMayorIgual9Porcent')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->join('patologias', 'paciente_patologia.patologia_id', 'patologias.id')
            ->where('patologias.nombre_patologia', 'DM2')
            ->whereNull('pacientes.egreso')
            ->where('controls.hba1cMayorIgual9Porcent', true)
            ->whereYear('controls.fecha_control', '>', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function ulcerasActivas_TipoCuracion_avz()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.ulcerasActivas_TipoCuracion', 'Avanzada')
            ->where('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function ulcerasActivas_TipoCuracion_conv()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.ulcerasActivas_TipoCuracion', 'Convencional')
            ->where('controls.fecha_control', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function aputacionPieDM2()
    {
        return $this->whereNotNull('aputacionPieDM2');
    }

    public function dm2Erc()
    {
        return $this->dm2()
            ->whereIn('erc', ['I', 'II', 'IIIA', 'IIIB', 'IV', 'V']);
    }

    public function dm2_hta()
    {
        return $this->dm2()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
                    ->where('paciente_patologia.patologia_id', 1)
            );
        /* return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'HTA'])->groupBy('pacientes.id')->havingRaw('count(*) = 2'); */
    }

    public function dm2_acv()
    {
        return $this->dm2()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
                    ->where('paciente_patologia.patologia_id', 5)
            );
        /* return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'ANTECEDENTE ACV'])->groupBy('pacientes.id')->havingRaw('count(*) = 2'); */
    }

    public function dm2_iam()
    {
        return $this->dm2()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
                    ->where('paciente_patologia.patologia_id', 4)
            );
        /* return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'ANTECEDENTE IAM'])->groupBy('pacientes.id')->havingRaw('count(*) = 2'); */
    }

    public function paMayor160()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.pa_mayor_160_100', '=', 1)
            ->where('controls.tipo_control', 'Medico')
            ->where('controls.fecha_control', '>=', Carbon::now()->subYear(1))
            ->latest('controls.fecha_control');
    }

    public function imc2529()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.imc_resultado', 'Sobrepeso')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function imc2831()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.imc_resultado', 'Sobrepeso')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function imcMayor30()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.imc_resultado', 'Obesidad')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function imcMayor32()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.imc_resultado', 'Obesidad')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    //****rem P5****
    //Seccion A
    public function depLeve()
    {
        return $this->whereDependencia('L')
            ->whereNull('egreso');
    }

    public function depMod()
    {
        return $this->whereDependencia('M')
            ->whereNull('egreso');
    }

    public function depGrave()
    {
        return $this->whereDependencia('G')
            ->whereNull('egreso');
    }

    public function depTotal()
    {
        return $this->whereDependencia('T')
            ->whereNull('egreso');
    }

    public function depSevera()
    {
        return $this->whereBetween('dependencia', ['G', 'T'])
            ->where('postrado_oncol', 'no oncologico')
            ->whereNull('egreso');
    }

    public function oncologico()
    {
        return $this->whereIn('dependencia', ['G', 'T'])
            ->where('postrado_oncol', '=', 'oncologico')
            ->whereNull('egreso');
    }

    public function escaras()
    {
        return $this->whereIn('dependencia', ['G', 'T'])
            ->where('escaras', true)
            ->whereNull('egreso');
    }

    public function subBarthel()
    {
        return $this->barthel()
            ->whereIn('controls.rBarthel', ['dMod', 'dLeve', 'dSevero', 'dTotal'])
            ->whereYear('controls.fecha_control', 2024)
            ->whereNull('egreso');
    }

    /*  public function totalSeccion()
    {
        return $this->efam()
            ->where('rEfam', ['autConRiesgo', 'autSinRiesgo', 'rDependencia'])
            ->whereIn('dependencia', ['L', 'M', 'G', 'T'])
            ->whereNull('egreso');
    } */

    //seccion B
    public function bajoPeso()
    {
        return $this->efam()
            ->where('controls.imc_resultado', 'Bajo peso')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    /* return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1cMayorIgual9Porcent', '=', 1)->latest('controls.fecha_control'); */

    public function normal()
    {
        return $this->efam()
            ->where('controls.imc_resultado', 'Normal')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function sobrePeso()
    {
        return $this->efam()
            ->where('controls.imc_resultado', 'Sobrepeso')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function obeso()
    {
        return $this->efam()
            ->where('controls.imc_resultado', 'Obesidad')
            ->whereYear('controls.fecha_control', 2024)
            ->latest('controls.fecha_control');
    }

    public function totalSeccionB()
    {
        return $this->efam()
            ->whereIn('controls.imc_resultado', ['Bajo peso', 'Normal', 'Sobrepeso', 'Obesidad'])
            ->whereYear('controls.fecha_control', 2024)
            //->orwhereIn('dependencia', ['L', 'M', 'G', 'T'])
            ->latest('controls.fecha_control');
    }

    //P3 seccion A
    public function asmaLeve($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.asmaClasif', 'Leve')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function asmaMod($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.asmaClasif', 'Moderado')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function asmaSevero($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.asmaClasif', 'Severo')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function sborLeve($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.sborClasif', 'Leve')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function sborMod($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.sborClasif', 'Moderado')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function sborSevero($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.sborClasif', 'Severo')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function epocA($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.epocClasif', 'A')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function epocEspiromVigente($fem, $masc, $clasif)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.epocClasif', $clasif)
            ->where('controls.espirometriaVigente', '>=', Carbon::now()->subYear(1))
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->latest('controls.fecha_control');
    }

    public function epocB($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.epocClasif', 'B')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function otrasResp($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.otras_enf', 'Otras respiratorias cronicas')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function espiromVigente($clasif, $fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.asmaClasif', $clasif)
            ->where('controls.espirometriaVigente', '>=', Carbon::now()->subYear(1))
            ->whereIn('pacientes.sexo', [$fem, $masc])
            ->latest('controls.fecha_control');
    }

    public function asmaControl($fem, $masc, $control)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.asmaControl', $control)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function epocControl($fem, $masc, $control)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Kinesiologo')
            ->where('controls.epocControl', $control)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P2 seccion A y A.1
    public function pesoEdad($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.indPesoEdad', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function pesoTalla($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.indPesoTalla', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function tallaEdad($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.indTallaEdad', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function integral($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.dNutInteg', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function imcEdad($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.indIMCEdad', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function perimCintura($fem, $masc, $ind)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.indPeCinturaEdad', '=', $ind)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P2 seccion B
    public function psicomotor($fem, $masc, $ev)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.evDPM', '=', $ev)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P2 seccion C
    public function riesgoIra($fem, $masc, $score)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.scoreIra', '=', $score)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P2 seccion D
    public function quintoMes($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->wherenotNull('controls.ctrlNut5to_mes')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function tercerAnio($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->wherenotNull('controls.ctrlNut3_6_meses')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }
    //P2 seccion F
    public function dgPa($fem, $masc, $dg)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.diagPA', '=', $dg)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }
    //P2 seccion G
    public function malNut($fem, $masc, $riesgo)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereYear('controls.fecha_control', 2024)
            ->where('controls.malNutExceso', '=', $riesgo)
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P2 seccion J
    public function rCero($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Dentista')
            ->whereIn('controls.rCero', ['alto', 'bajo'])
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function dCaries($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Dentista')
            ->whereNotNull('controls.dCaries')
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function inasist($fem, $masc)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Dentista')
            ->where('controls.inasistente', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereIn('sexo', [$fem, $masc])
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //ECICEP
    function g3()
    {
        return $this->whereHas('patologias', function ($query) {
            $query->where('nombre_patologia', '!=', 'SALUD MENTAL');
        }, '>', 4)
            ->whereNull('egreso');
    }

    function ingresosG3()
    {
        return $this->g3()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('controls', 'controls.paciente_id', '=', 'pacientes.id')
                    ->where('controls.i_ecicep', true),
            );
    }

    function g2()
    {
        return $this->whereHas(
            'patologias',
            function ($query) {
                $query->where('nombre_patologia', '!=', 'SALUD MENTAL');
            },
            '>',
            1,
        )->withCount('patologias')->having('patologias_count', '<', 5)->whereNull('egreso');
    }

    function ingresosG2()
    {
        return $this->g2()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('controls', 'controls.paciente_id', '=', 'pacientes.id')
                    ->where('controls.i_ecicep', true),
            );
    }

    function g1()
    {
        return $this->whereHas(
            'patologias',
            function ($query) {
                $query->where('nombre_patologia', '!=', 'SALUD MENTAL');
            },
            '=',
            1,
        )->whereNull('egreso');
    }

    function ingresosG1()
    {
        return $this->g1()
            ->whereIn(
                'pacientes.rut',
                DB::table('pacientes')
                    ->select('pacientes.rut')
                    ->join('controls', 'controls.paciente_id', '=', 'pacientes.id')
                    ->where('controls.i_ecicep', true),
            );
    }

    //P1 seccion A
    public function diu($metodo)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where($metodo, true)
            //->whereYear('controls.fecha_control', '2024')
            ->where('sexo', 'Femenino')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function hormonal($metodo)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.hormonal', $metodo)
            //->whereYear('controls.fecha_control', '2024')
            ->where('sexo', 'Femenino')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function mac($sexo)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.preservativo', $sexo)
            //->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function estQx($sexo)
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.esterilizacion', $sexo)
            //->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function totalMac()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function enfcv()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
            ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('sexo', 'Femenino')
            ->where('controls.tipo_control', 'Matrona')
            ->whereIn('nombre_patologia', ['HTA', 'DM2'])
            ->whereNull('pacientes.egreso');
    }

    //P1 seccion F
    public function climater()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.climater', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    //P1 seccion B
    public function rBiops()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.embarazo', true)
            ->where('controls.rPsicosocial', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function violenciaGen()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.embarazo', true)
            ->where('controls.vGenero', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function aro()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.embarazo', true)
            ->where('controls.aro', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function embarazo()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.embarazo', true)
            ->whereYear('controls.fecha_control', '2024')
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }

    public function lactancia()
    {
        return $this->select('nombres', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'sexo', 'rut', 'lactancia', 'ficha', 'sector', 'id')
            ->where('lactancia', true);
    }

    public function embarazada()
    {
        return $this->select('nombres', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'sexo', 'rut', 'embarazada', 'ficha', 'sector', 'id')
            ->where('embarazada', true);
    }

    public function postrados()
    {
        return $this->select('nombres', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'sexo', 'rut', 'ficha', 'sector', 'id', 'postrado')
            ->where('postrado', true)
            ->whereNull('egreso');
    }

    public function cuidadores()
    {
        return $this->select('nombres', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'sexo', 'rut', 'id')
            ->where('cuidador', true)
            ->whereNull('egreso');
    }

    //P12 seccion C
    public function mamoVigente()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->where('controls.mamoVigente', '<=', Carbon::now()->subYear(2))
            ->whereNull('pacientes.egreso')
            ->latest('controls.fecha_control');
    }
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function getGrupoAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function examenes()
    {
        return $this->hasMany(Examen::class);
    }

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }

    public function patologias()
    {
        return $this->belongsToMany(Patologia::class)->withPivot('created_at');
    }

    public function scopeSearch($query, $q)
    {
        if ($q) return $query->where('sexo', 'LIKE', "%$q%")->orWhere('sector', 'LIKE', "%$q%");
    }

    public function familia(){

    }

    //seccion A

    public function rcv_bajo()
    {
        return $this->whereRiesgo_cv('BAJO');
    }

    public function rcv_mod()
    {
        return $this->whereRiesgo_cv('MODERADO');
    }

    public function rcv_alto()
    {
        return $this->whereRiesgo_cv('ALTO');
    }

    public function s_erc()
    {
        return $this->pscv()->whereErc('sin');
    }

    public function ercI()
    {
        return $this->pscv()->whereErc('I');
    }

    public function ercII()
    {
        return $this->pscv()->whereErc('II');
    }

    public function ercIIIa()
    {
        return $this->pscv()->whereErc('IIIA');
    }

    public function ercIIIb()
    {
        return $this->pscv()->whereErc('IIIB');
    }

    public function ercIV()
    {
        return $this->pscv()->whereErc('IV');
    }

    public function ercV()
    {
        return $this->pscv()->whereErc('V');
    }

    public function ercTotal()
    {
        return $this->pscv()->whereIn('erc', ['sin', 'I', 'II', 'IIIA', 'IIIB', 'IV', 'V']);
    }

    public function pscv()
    {
        return $this->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO']);
    }

    public function hta()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
                    ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
                        ->where('patologias.nombre_patologia', 'HTA');
    }

    public function dm2()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', 'pacientes.id')
                    ->join('patologias', 'patologias.id', 'paciente_patologia.patologia_id')
                        ->where('patologias.nombre_patologia', 'DM2');
    }

    public function dlp()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'dlp');
    }

    public function iam()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'antecedente iam');
    }

    public function acv()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'antecedente acv');
    }

    public function tbq()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'tabaquismo');
    }

    //seccion B

    public function pa140()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.pa_menor_140_90', '=', 1)->where('controls.tipo_control', '=', 'Medico')->latest('controls.fecha_control');
    }

    public function pa150()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.pa_menor_150_90', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac17()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1cMenor7Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac18()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1cMenor8Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac17Pa140Ldl100()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1c7Pa140_90Ldl100Menores', '=', 1)->latest('controls.fecha_control');
    }

    public function ldl100()
    {
        return $this->rcv_alto()->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.ldlMenor100', '=', 1)->latest('controls.fecha_control');
    }

    public function aspirinas()
    {
        return $this->where('usoAspirinas', '=', 1);
    }

    public function estatinas()
    {
        return $this->where('usoEstatinas', '=', 1);
    }

    //seccion C

    public function racVigente()
    {
        return $this->dm2()->where('racVigente', '>=', Carbon::now()->subYear(1));
    }

    public function vfgVigente()
    {
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
        return $this->dm2()->where('usoInsulina', '=', 1);
    }

    public function insulinaHba1C()
    {
        return $this->hba1cMayorIgual9Porcent()->where('pacientes.usoInsulina', '=', 1);
    }

    public function hba1cMayorIgual9Porcent()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1cMayorIgual9Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function usoIecaAraII()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->where('paciente_patologia.patologia_id', '=', 2)->where('pacientes.usoIecaAraII', '=', 1)->whereIn('erc', ['IIIB', 'IV', 'V']);
    }

    public function ldlVigente()
    {
        return $this->where('ldlVigente', '>=', Carbon::now()->subYear(1));
    }


    //Controles Enfermera *********
    public function evaluacionPie_bajo()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.evaluacionPie', '=', 'Bajo')->latest('controls.fecha_control');
    }

    public function evaluacionPie_moderado()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.evaluacionPie', '=', 'Moderado')->latest('controls.fecha_control');
    }

    public function evaluacionPie_alto()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.evaluacionPie', '=', 'Alto')->latest('controls.fecha_control');
    }

    public function evaluacionPie_maximo()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.evaluacionPie', '=', 'Maximo')->latest('controls.fecha_control');
    }

    public function SinEvaluacionPie(){
        return $this->pscv()->select('pacientes.nombres', 'pacientes.apellidoM', 'pacientes.apellidoP', 'pacientes.rut', 'pacientes.ficha', 'patologias.nombre_patologia')
            ->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->join('patologias', 'paciente_patologia.patologia_id', 'patologias.id')
                ->where('patologias.nombre_patologia', 'DM2')
                ;
    }

    public function evaluacionPie(){
        return $this->pscv()->select('pacientes.nombres', 'pacientes.apellidoM', 'pacientes.apellidoP', 'pacientes.rut', 'pacientes.ficha', 'patologias.nombre_patologia', 'controls.fecha_control', 'controls.evaluacionPie')
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->join('patologias', 'paciente_patologia.patologia_id', 'patologias.id')
                ->where('patologias.nombre_patologia', 'DM2')
                ->whereIn('controls.evaluacionPie',['Maximo', 'Moderado', 'Bajo', 'Alto'])
                ->whereYear('controls.fecha_control', '>', 2021)
                    ->latest('controls.fecha_control');

    }

    public function ulcerasActivas_TipoCuracion_avz()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.ulcerasActivas_TipoCuracion', '=', 'Avanzada')->latest('controls.fecha_control');
    }

    public function ulcerasActivas_TipoCuracion_conv()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.ulcerasActivas_TipoCuracion', '=', 'Convencional')->latest('controls.fecha_control');
    }
    //Controles Enfermera ************

    public function aputacionPieDM2()
    {
        return $this->whereNotNull('aputacionPieDM2');
    }

    public function dm2_hta()
    {
        return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'HTA'])->groupBy('pacientes.id')->havingRaw('count(*) = 2');
    }

    public function dm2_acv()
    {
        return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'ANTECEDENTE ACV'])->groupBy('pacientes.id')->havingRaw('count(*) = 2');
    }

    public function dm2_iam()
    {
        return DB::table('pacientes')->select(DB::raw('pacientes.id'))->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['DM2', 'ANTECEDENTE IAM'])->groupBy('pacientes.id')->havingRaw('count(*) = 2');
    }

    public function paMayor160()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.pa_mayor_160_100', '=', 1)->where('controls.tipo_control', '=', 'Medico')->latest('controls.fecha_control');
    }

    public function imc2529()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.imc_resultado', '=', 'Sobrepeso')->latest('controls.fecha_control');
    }

    public function imc2831()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.imc_resultado', '=', 'Sobrepeso')->latest('controls.fecha_control');
    }

    public function imcMayor30()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.imc_resultado', '=', 'Obesidad')->latest('controls.fecha_control');
    }

    public function imcMayor32()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.imc_resultado', '=', 'Obesidad')->latest('controls.fecha_control');
    }

    //****rem P5****
    //Seccion A
    public function aSinRiesgo()
    {
        return $this->whereFuncionalidad('SR');
    }

    public function aRiesgo()
    {
        return $this->whereFuncionalidad('R');
    }

    public function riesgoDependencia()
    {
        return $this->whereFuncionalidad('RD');
    }

    public function subEsfam()
    {
        return $this->whereIn('funcionalidad', ['SR', 'R', 'RD']);
    }

    public function depLeve()
    {
        return $this->whereDependencia('L');
    }

    public function depMod()
    {
        return $this->whereDependencia('M');
    }

    public function depGrave()
    {
        return $this->whereDependencia('G');
    }

    public function depTotal()
    {
        return $this->whereDependencia('T');
    }

    public function subBarthel()
    {
        return $this->whereIn('dependencia', ['L', 'M', 'G', 'T']);
    }

    public function totalSeccion()
    {
        return $this->whereIn('funcionalidad', ['SR', 'R', 'RD'])->orWhereIn('dependencia', ['L', 'M', 'G', 'T']);
    }

    //seccion B

    public function bajoPeso()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.imc_resultado', '=', 'Bajo peso')->latest('controls.fecha_control');
    }

    /* return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.hba1cMayorIgual9Porcent', '=', 1)->latest('controls.fecha_control'); */

    public function normal()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.imc_resultado', '=', 'Normal')->latest('controls.fecha_control');
    }

    public function sobrePeso()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.imc_resultado', '=', 'Sobrepeso')->latest('controls.fecha_control');
    }

    public function obeso()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->where('controls.imc_resultado', '=', 'Obesidad')->latest('controls.fecha_control');
    }

    public function totalSeccionB()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.tipo_control', '=', 'Medico')->whereIn('controls.imc_resultado', ['Bajo peso', 'Normal', 'Sobrepeso', 'Obesidad'])->latest('controls.fecha_control');
    }
}

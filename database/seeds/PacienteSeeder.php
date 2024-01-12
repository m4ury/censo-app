<?php

use App\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $pacientes = [
//carga sala ira/era para estadisticas semestral Dic 2023

/*CARGA INGRESOS PARA ESTADISTICAS PROGRAMA SM REM P6 Corte Dic 2023*/
['rut' =>'17442524','nombres' =>'PABLA RENEE','apellidoP' =>'DÍAZ','apellidoM' =>'FUENZALIDA','sexo' =>'Femenino','fecha_nacimiento' =>'1990-02-23'],
['rut' =>'17444103','nombres' =>'ROMINA ALEJANDRA','apellidoP' =>'ROJAS','apellidoM' =>'LOPEZ','sexo' =>'Femenino','fecha_nacimiento' =>'1990-02-10'],
['rut' =>'18280496','nombres' =>'JUANA PATRICIA','apellidoP' =>'SILVA','apellidoM' =>'ORELLANA','sexo' =>'Femenino','fecha_nacimiento' =>'1992-12-16'],
['rut' =>'23722562','nombres' =>'ROCIO NICOL','apellidoP' =>'DONAIRE','apellidoM' =>'CUBILLOS','sexo' =>'Femenino','fecha_nacimiento' =>'2011-08-11'],
['rut' =>'22813856','nombres' =>'VICENTE','apellidoP' =>'GONZALEZ','apellidoM' =>'LILLO','sexo' =>'Masculino','fecha_nacimiento' =>'2010-01-10'],
['rut' =>'23352224','nombres' =>'ALONSO TOMAS','apellidoP' =>'PLAZA','apellidoM' =>'MARTINEZ','sexo' =>'Masculino','fecha_nacimiento' =>'2011-01-10'],
['rut' =>'24756258','nombres' =>'MARTIN','apellidoP' =>'RETAMAL','apellidoM' =>'ANDRADE','sexo' =>'Masculino','fecha_nacimiento' =>'2016-01-11'],
['rut' =>'25032059','nombres' =>'SOL MARGARITA','apellidoP' =>'CAMPOS','apellidoM' =>'CUBILLOS','sexo' =>'Femenino','fecha_nacimiento' =>'2016-01-11'],
['rut' =>'7725784','nombres' =>'MARIO OSVALDO','apellidoP' =>'ALVARADO','apellidoM' =>'SANTANDER','sexo' =>'Masculino','fecha_nacimiento' =>'1960-01-11'],
['rut' =>'10282454','nombres' =>'JUAN RAMON','apellidoP' =>'HERRERA','apellidoM' =>'ESPRONCEDA','sexo' =>'Masculino','fecha_nacimiento' =>'1959-01-10'],
['rut' =>'16844159','nombres' =>'VALESKA YASMIN','apellidoP' =>'JIMENEZ','apellidoM' =>'ARENAS','sexo' =>'Femenino','fecha_nacimiento' =>'1989-01-10'],
['rut' =>'17853730','nombres' =>'MARY ELENA','apellidoP' =>'GUERRERO','apellidoM' =>'SAN MARTIN','sexo' =>'Femenino','fecha_nacimiento' =>'1992-01-11'],
['rut' =>'21588717','nombres' =>'LUCIANA ANTONIA','apellidoP' =>'DÍAZ','apellidoM' =>'MERINO','sexo' =>'Femenino','fecha_nacimiento' =>'2005-01-10'],
['rut' =>'25032059','nombres' =>'SOL MARGARITA','apellidoP' =>'CAMPOS','apellidoM' =>'CUBILLOS','sexo' =>'Femenino','fecha_nacimiento' =>'2016-01-11'],
['rut' =>'6511475','nombres' =>'ERICA DE LAS MERCEDES','apellidoP' =>'ORTIZ','apellidoM' =>'ROJAS','sexo' =>'Femenino','fecha_nacimiento' =>'1955-01-10'],
['rut' =>'19006702','nombres' =>'NARCISO ALEJANDRO','apellidoP' =>'FUENZALIDA','apellidoM' =>'SERRANO','sexo' =>'Masculino','fecha_nacimiento' =>'1997-01-10'],
['rut' =>'19006761','nombres' =>'JOSÉ IGNACIO','apellidoP' =>'VALENZUELA','apellidoM' =>'VALDIVIA','sexo' =>'Masculino','fecha_nacimiento' =>'1997-01-10'],
['rut' =>'22296356','nombres' =>'CRISTOPHER ALEJANDRO','apellidoP' =>'GONZÁLEZ','apellidoM' =>'ALIAGA','sexo' =>'Masculino','fecha_nacimiento' =>'2008-01-11'],
['rut' =>'23977262','nombres' =>'LUCAS FELIPE','apellidoP' =>'JAÑA','apellidoM' =>'GUERRA','sexo' =>'Masculino','fecha_nacimiento' =>'2013-01-10'],
['rut' =>'9356415','nombres' =>'DAVID MOISÉS','apellidoP' =>'DÍAZ','apellidoM' =>'PORRAS','sexo' =>'Masculino','fecha_nacimiento' =>'1963-01-10'],
['rut' =>'12206505','nombres' =>'MANUEL RICARDO','apellidoP' =>'CORTES','apellidoM' =>'CORREA','sexo' =>'Masculino','fecha_nacimiento' =>'1972-01-11'],
['rut' =>'12727096','nombres' =>'INGRID FABIOLA','apellidoP' =>'CORNEJO','apellidoM' =>'CORNEJO','sexo' =>'Femenino','fecha_nacimiento' =>'1976-01-11'],
['rut' =>'13519776','nombres' =>'JORGE','apellidoP' =>'BUSTAMANTE','apellidoM' =>'MOLL','sexo' =>'Masculino','fecha_nacimiento' =>'1978-01-10'],
['rut' =>'18280486','nombres' =>'SERGIO ENRIQUE','apellidoP' =>'GUERRERO','apellidoM' =>'FLORES','sexo' =>'Masculino','fecha_nacimiento' =>'1989-01-10'],
['rut' =>'18595104','nombres' =>'LUIS ALBERTO','apellidoP' =>'CERDA','apellidoM' =>'PAVEZ','sexo' =>'Masculino','fecha_nacimiento' =>'1995-01-10'],
['rut' =>'19527373','nombres' =>'AZGAD GENESID BELEN','apellidoP' =>'ALARCON','apellidoM' =>'NUÑEZ','sexo' =>'Femenino','fecha_nacimiento' =>'1998-01-10'],
['rut' =>'20150885','nombres' =>'NICOLAS ARMANDO','apellidoP' =>'MORALES','apellidoM' =>'FUENZALIDA','sexo' =>'Masculino','fecha_nacimiento' =>'2000-01-11'],
['rut' =>'21102477','nombres' =>'JAVIER IGNACIO','apellidoP' =>'HERRERA','apellidoM' =>'AHUMADA','sexo' =>'Masculino','fecha_nacimiento' =>'2003-01-10'],
['rut' =>'23702655','nombres' =>'AGUSTINA ALEJANDRA','apellidoP' =>'HERRERA','apellidoM' =>'GONZÁLEZ','sexo' =>'Femenino','fecha_nacimiento' =>'2012-01-11'],
['rut' =>'23706651','nombres' =>'IAN PATRICK','apellidoP' =>'BAEZA','apellidoM' =>'VALDÉS','sexo' =>'Masculino','fecha_nacimiento' =>'2012-01-11'],
['rut' =>'7098677','nombres' =>'ANTONIA DEL CARMEN','apellidoP' =>'PENA','apellidoM' =>'MUNOZ','sexo' =>'Femenino','fecha_nacimiento' =>'1957-01-10']
];
foreach ($pacientes as $paciente) {
    Paciente::updateOrCreate(['rut' => $paciente['rut']],
    ['nombres' => $paciente['nombres'], 'apellidoP' => $paciente['apellidoP'],
    'apellidoM' => $paciente['apellidoM'],
    'fecha_nacimiento' => $paciente['fecha_nacimiento'], 'sexo' => $paciente['sexo'], 'direccion' => 'hualane'
    , 'comuna' => 'Hualane', 'sector' => 'blanco', 'egreso' => null]
    );
    }
}
        }

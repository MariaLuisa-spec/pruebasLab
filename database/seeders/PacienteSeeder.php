<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;
class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paciente1 = new Paciente;
        $paciente1->identificacion = '1111';
        $paciente1->nombres = 'Pedro Pablo';
        $paciente1->apellidos = 'Pérez Perea';
        $paciente1->edad = '20';
        $paciente1->genero = 'hombre';
        $paciente1->EPS = 'sura';
        $paciente1->TP = 1;
        $paciente1->PTT =3 ;
        $paciente1->III = 4;
        $paciente1->AT_III = 5;
        $paciente1->TT = 6; 
        $paciente1->Fibrinogeno = 7;
        $paciente1->save();
    }
}

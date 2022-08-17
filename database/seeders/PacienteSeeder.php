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
        $paciente1->EPS = 'SURA';
        $paciente1->TP = 1;
        $paciente1->PTT =3 ;
        $paciente1->III = 4;
        $paciente1->AT_III = 5;
        $paciente1->TT = 6; 
        $paciente1->Fibrinogeno = 7;
        $paciente1->save();

        $paciente2 = new Paciente;
        $paciente2->identificacion = '1236';
        $paciente2->nombres = 'Marta';
        $paciente2->apellidos = 'Correa';
        $paciente2->edad = '28';
        $paciente2->genero = 'Mujer';
        $paciente2->EPS = 'COOMEVA';
        $paciente2->TP = 16.7;
        $paciente2->PTT =37 ;
        $paciente2->III = 42;
        $paciente2->AT_III = 15;
        $paciente2->TT = 26; 
        $paciente2->Fibrinogeno = 17;
        $paciente2->save();
    }
}

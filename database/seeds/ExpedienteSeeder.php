<?php

use App\Expediente;
use Illuminate\Database\Seeder;

class ExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expediente::create([
            'id_expediente' => 123456,
            'descripcion' => 'Caso Matias',
            'archivo' => '/import/adminlawyer/Expediente_2021.pdf',
            'fecha_inicio' => '2021-05-11',
            'fecha_vencimiento' => '2021-05-11',
        ]);
    }
}

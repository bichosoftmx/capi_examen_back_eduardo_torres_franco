<?php

use Illuminate\Database\Seeder;

class llenar_domicilio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i=1; $i <= 100; $i++){
            DB::table('user_domicilio')->insert(array(
                'user_id' => $i,
                'domicilio' => 'Mi calle '.$i,
                'numero_exterior' => $i+10,
                'cp' => '5505'.$i,
                'ciudad' => 'México'
            ));
        }

        $this->command->info('Tabla domicilio llenada correctamente');
    }
}




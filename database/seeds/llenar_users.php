<?php

use Illuminate\Database\Seeder;

class llenar_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i <= 100; $i++){
            DB::table('users')->insert(array(
                'name' => 'Eduardo ' . $i,
                'email' => 'eduardo'.$i.'@hotmail.com',
                'password' => 'rojo200'.$i,
                'fecha_nacimiento' => '2023-06-06'
            ));
        }

        $this->command->info('Tabla usuarios llenada correctamente');
    }
}

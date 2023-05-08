<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            //Ingresar datos cualquiera para cargar a la base de datos...
            ['nombre' => 'Fulanito1', 'apellido' => 'Perez', 'fechaNac' => '1990-05-07'],        /*1*/ 
            ['nombre' => 'Fulanito2', 'apellido' => 'Gonzalez', 'fechaNac' => '1995-02-15'],     /*2*/
            ['nombre' => 'Fulanito3', 'apellido' => 'Ramirez', 'fechaNac' => '1993-05-07'],      /*3*/
            ['nombre' => 'Fulanito4', 'apellido' => 'Hernandez', 'fechaNac' => '1999-05-07'],    /*4*/
            ['nombre' => 'Fulanito5', 'apellido' => 'Olivares', 'fechaNac' => '1991-02-15'],     /*5*/
            ['nombre' => 'Fulanito6', 'apellido' => 'Lemus', 'fechaNac' => '1992-05-07'],           /*6*/
            ['nombre' => 'Fulanito7', 'apellido' => 'Dominguez', 'fechaNac' => '1987-05-07'],      /*7*/
            ['nombre' => 'Fulanito8', 'apellido' => 'Dantes', 'fechaNac' => '1989-02-15'],        /*8*/
            ['nombre' => 'Fulanito9', 'apellido' => 'Guerra', 'fechaNac' => '2000-05-07'],       /*9*/
            ['nombre' => 'Fulanito10', 'apellido' => 'Pereira', 'fechaNac' => '1998-05-07'],    /*10*/
            ['nombre' => 'Fulanito11', 'apellido' => 'Gavidia', 'fechaNac' => '1995-02-15'],   /*11*/
            ['nombre' => 'Fulanito12', 'apellido' => 'Salguero', 'fechaNac' => '1996-05-07'], /*12*/
        ];
    
        DB::table('clientes')->insert($clientes);
    }
}

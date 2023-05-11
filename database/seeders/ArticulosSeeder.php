<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulos = [
            //Ingresar datos cualquiera para cargar a la base de datos...
            ['nombre' => 'Samsung S23', 'descripcion' => 'Telefono Gama Alta', 'cantInventario' => '20', 'precio' => '999.99'],        /*1*/ 
            ['nombre' => 'Samsung S22', 'descripcion' => 'Telefono Gama Alta', 'cantInventario' => '19', 'precio' => '850.99'],     /*2*/
            ['nombre' => 'Iphone 14 Pro Max', 'descripcion' => 'Telefono Gama Alta', 'cantInventario' => '26', 'precio' => '1599.99'], /*3*/
            ['nombre' => 'Iphone 13 Pro Max', 'descripcion' => 'Telefono Gama Alta', 'cantInventario' => '23', 'precio' => '1299.99'], /*4*/
            ['nombre' => 'Macbook Air', 'descripcion' => 'Laptop Gama Alta', 'cantInventario' => '20', 'precio' => '1500.00'],   /*5*/
            ['nombre' => 'Macbook Pro', 'descripcion' => 'Laptop Gama Alta', 'cantInventario' => '15', 'precio' => '1999.99'],        /*6*/
            ['nombre' => 'iMac 24Inch', 'descripcion' => 'Desktop Gama Alta', 'cantInventario' => '9', 'precio' => '1399.99'],     /*7*/
            ['nombre' => 'iMac 22Inch', 'descripcion' => 'Desktop Gama Alta', 'cantInventario' => '5', 'precio' => '1100.99'],      /*8*/
            ['nombre' => 'Samsung Smart Watch Pro', 'descripcion' => 'Accesorio Gama Alta', 'cantInventario' => '7', 'precio' => '499.99'],     /*9*/
            ['nombre' => 'Samsung Smart Watch G3', 'descripcion' => 'Accesorio Gama Alta', 'cantInventario' => '12', 'precio' => '349.99'],   /*10*/
            ['nombre' => 'Apple Watch S8', 'descripcion' => 'Accesorio Gama Alta', 'cantInventario' => '19', 'precio' => '999.99'], /*11*/
            ['nombre' => 'Apple Watch S7', 'descripcion' => 'Accesorio Gama Alta', 'cantInventario' => '9', 'precio' => '699.99'], /*12*/
        ];
    
        DB::table('articulos')->insert($articulos);
    }
}

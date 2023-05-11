<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetallePedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle_pedidos = [
            //Ingresar datos cualquiera para cargar a la base de datos...
            ['cantidad' => '1 ', 'descuento' => '0.05', 'id_pedido' => '1', 'id_articulo' => '1'],        /*1*/ 
            ['cantidad' => '1 ', 'descuento' => '0.15', 'id_pedido' => '2', 'id_articulo' => '2'],     /*2*/
            ['cantidad' => '1 ', 'descuento' => '0.05', 'id_pedido' => '3', 'id_articulo' => '3'], /*3*/
            ['cantidad' => '1 ', 'descuento' => '0.10', 'id_pedido' => '4', 'id_articulo' => '4'], /*4*/
            ['cantidad' => '1 ', 'descuento' => '0.05', 'id_pedido' => '5', 'id_articulo' => '5'],   /*5*/
            ['cantidad' => '1 ', 'descuento' => '0.08', 'id_pedido' => '6', 'id_articulo' => '6'],        /*6*/
            ['cantidad' => '1 ', 'descuento' => '0.07', 'id_pedido' => '7', 'id_articulo' => '7'],     /*7*/
            ['cantidad' => '1 ', 'descuento' => '0.03', 'id_pedido' => '8', 'id_articulo' => '8'],      /*8*/
            ['cantidad' => '1 ', 'descuento' => '0.10', 'id_pedido' => '9', 'id_articulo' => '9'],     /*9*/
            ['cantidad' => '1 ', 'descuento' => '0.15', 'id_pedido' => '10', 'id_articulo' => '10'],   /*10*/
            ['cantidad' => '1 ', 'descuento' => '0.02', 'id_pedido' => '11', 'id_articulo' => '11'], /*11*/
            ['cantidad' => '1 ', 'descuento' => '0.05', 'id_pedido' => '12', 'id_articulo' => '12'], /*12*/
        ];
    
        DB::table('detalle_pedidos')->insert($detalle_pedidos);
    }
}

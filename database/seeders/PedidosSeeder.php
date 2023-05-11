<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidos = [
            //Ingresar datos cualquiera para cargar a la base de datos...
            ['fechaPedido' => '2023-05-06', 'fechaEntrega' => '2023-05-07', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 1], /*1*/
            ['fechaPedido' => '2023-05-06', 'fechaEntrega' => '2023-05-08', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 2], /*2*/
            ['fechaPedido' => '2023-05-04', 'fechaEntrega' => '2023-05-09', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 3],      /*3*/
            ['fechaPedido' => '2023-05-03', 'fechaEntrega' => '2023-05-08', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 4],    /*4*/
            ['fechaPedido' => '2023-05-01', 'fechaEntrega' => '2023-05-07', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 5],     /*5*/
            ['fechaPedido' => '2023-05-02', 'fechaEntrega' => '2023-05-09', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 6],      /*6*/
            ['fechaPedido' => '2023-05-02', 'fechaEntrega' => '2023-05-08', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 7],      /*7*/
            ['fechaPedido' => '2023-05-05', 'fechaEntrega' => '2023-05-07', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 8],        /*8*/
            ['fechaPedido' => '2023-05-02', 'fechaEntrega' => '2023-05-10', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 9],       /*9*/
            ['fechaPedido' => '2023-05-02', 'fechaEntrega' => '2023-05-11', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 10],    /*10*/
            ['fechaPedido' => '2023-05-05', 'fechaEntrega' => '2023-05-10', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 11],   /*11*/
            ['fechaPedido' => '2023-05-06', 'fechaEntrega' => '2023-05-09', 'Observaciones'=> 'Pendiente Entrega', 'id_cliente'=> 12], /*12*/
        ];
    
        DB::table('pedidos')->insert($pedidos);
    }
}

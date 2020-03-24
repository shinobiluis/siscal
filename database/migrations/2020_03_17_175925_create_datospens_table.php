<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatospensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datospen', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->timestamps();
            $table->integer('num_pen');
            $table->char('u_version',1);
            $table->char('rfc_pen', 13);
            $table->char('curp', 18);
            $table->integer('num_issste');
            $table->char('nombre', 60);
            $table->char('paterno', 40);
            $table->char('materno', 40);
            $table->char('nombre_h', 40);
            $table->char('ind_nomb', 1);
            $table->smallInteger('sexo');
            $table->smallInteger('tip_pen_act');
            $table->smallInteger('tip_pen_org');
            $table->smallInteger('tip_pago');
            $table->char('ent_pago', 6);
            $table->char('zon_pago', 3);
            $table->smallInteger('ent_pen');
            $table->integer('primer_ramo');
            $table->date('primera_fecha');
            $table->integer('ult_ramo');
            $table->date('ult_fecha');
            $table->decimal('sueldo_reg', 9, 2);
            $table->decimal('procentaje', 5, 2);
            $table->decimal('imp_ori_pendi', 9, 2);
            $table->decimal('imp_ori_pende', 9, 2);
            $table->date('fecha_inidi');
            $table->date('fecha_inide');
            $table->char('tiempo_serv_trab',6);
            $table->smallInteger('num_deudo');
            $table->smallInteger('grupo_familiar');
            $table->smallInteger('vigencia');
            $table->date('fecha_vigencia');
            $table->date('alta_nomina');
            $table->decimal('importe_pen');
            $table->smallInteger('radicacion_exp');
            $table->integer('num_cheque');
            $table->decimal('total_percep', 8, 2);
            $table->decimal('total_deduc', 8, 2);
            $table->decimal('liquido', 8, 2);
            $table->char('nombre_cheque', 60);
            $table->smallInteger('meses_cotizados');
            $table->smallInteger('meses_nocotizados');
            $table->smallInteger('meses_pagados');
            $table->char('plazas', 20);
            $table->char('ind_at_dir', 1);
            $table->char('cta_at_dir', 20);
            $table->date('fecha_reval');
            $table->integer('spe_id');
            $table->decimal('ptg_aumen',4,2);
            $table->decimal('cuota_ant',8,2);
            $table->integer('ramo1');
            $table->char('clave1',20);
            $table->char('nivel1',5);
            $table->decimal('ptje1',4,2);
            $table->char('estatus1',2);
            $table->integer('ramo2');
            $table->char('clave2',20);
            $table->char('nivel2',5);
            $table->decimal('ptje2', 4,2);
            $table->char('estatus2',2);
            $table->integer('ramo3');
            $table->char('clave3',20);
            $table->char('nivel3', 5);
            $table->decimal('ptje3', 4,2);
            $table->char('estatus3',2);
            $table->integer('ramo4');
            $table->char('clave4', 20);
            $table->char('nivel4', 5);
            $table->decimal('ptje4', 4,2);
            $table->char('estatus4',2);
            $table->integer('ramo5');
            $table->char('clave5',20);
            $table->char('nivel5',5);
            $table->decimal('ptje5', 4,2);
            $table->char('estatus5',2);




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datospen');
    }
}

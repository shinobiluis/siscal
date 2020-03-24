<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistDatosNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_datos_new', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->integer('num_pen');
            $table->char('u_version', 1);
            $table->smallInteger('iden_deudo');
            $table->integer('consecutivo');
            $table->char('fecha_nomina',8);
            $table->char('rfc_pen', 13);
            $table->char('curp', 18);
            $table->char('nombre', 60);
            $table->char('ent_pago', 6);
            $table->char('zon_pago', 3);
            $table->smallInteger('grupo_familiar');
            $table->smallInteger('tip_pen_act');
            $table->smallInteger('tipo_pago');
            $table->integer('num_cheque');
            $table->integer('importe_pen');//En tipo dice MONEY
            $table->smallInteger('meses_cotizados');
            $table->smallInteger('meses_nocotizados');
            $table->smallInteger('meses_pagados');
            $table->char('clave_tarjeta', 1);
            $table->char('num_tarjeta', 20);
            $table->char('fecha_inicio', 8);
            $table->integer('ult_ramo');
            $table->smallInteger('cpto_prestamo1');
            $table->smallInteger('descuento1');
            $table->smallInteger('plazo1');
            $table->smallInteger('cpto_prestamo2');
            $table->smallInteger('descuento2');
            $table->smallInteger('plazo2');
            $table->integer('folio');
            $table->integer('total_percep');
            $table->integer('total_deduc');
            $table->integer('total_pagar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_datos_new');
    }
}

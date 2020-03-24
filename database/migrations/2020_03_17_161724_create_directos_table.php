<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directo', function (Blueprint $table) {
            // $table->bigIncrements('id');
            
            $table->decimal('num_issste', 8, 2)->nullable(); // no se puede declarar 8, 255
            $table->char('u_version',1)->nullable();
            $table->decimal('codigo_postal', 5, 2)->nullable();// no se puede declarar 8, 255
            $table->decimal('nco_cve', 5, 2)->nullable();
            $table->char('ent_cve',2)->nullable();
            $table->char('curp',18)->nullable();
            $table->decimal('nss',11,2)->nullable(); // 255
            $table->char('clinica',1)->nullable();
            $table->char('dto_estado', 1)->nullable();
            $table->char('sexo', 1)->nullable();
            $table->char('estado_civil', 1)->nullable();
            $table->char('t_direecto', 2)->nullable();
            $table->date('fecha_alta')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->date('fecha_emi_vd1')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->char('num_exterior', 5)->nullable();
            $table->char('num_interior', 5)->nullable();
            $table->char('rfc', 13)->nullable();
            $table->char('telefono', 30)->nullable();
            $table->char('apellido_paterno', 40)->nullable();
            $table->char('apellido_materno', 40)->nullable();
            $table->char('nombre', 40)->nullable();
            $table->char('calle', 45)->nullable();
            $table->char('poblacion', 45)->nullable();
            $table->date('fec_nac')->nullable();
            $table->char('flag_homo',1)->nullable();
            $table->char('elig_proc', 1)->nullable();
            $table->char('usuario', 8)->nullable();
            $table->date('fecha_aud')->nullable();
            $table->char('hora_aud', 8)->nullable();
            $table->char('componente_cve', 8)->nullable();
            $table->char('ip_maquina', 15)->nullable();
            // $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directo');
    }
}

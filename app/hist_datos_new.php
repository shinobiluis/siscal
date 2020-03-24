<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hist_datos_new extends Model
{
    protected $table = 'hist_datos_new';
    public $timestamps = false;
    protected $fillable = [
        'num_pen',
        'u_version',
        'iden_deudo',
        'consecutivo',
        'fecha_nomina',
        'rfc_pen',
        'curp',
        'nombre',
        'ent_pago',
        'zon_pago',
        'grupo_familiar',
        'tip_pen_act',
        'tipo_pago',
        'num_cheque',
        'importe_pen',
        'meses_cotizados',
        'meses_nocotizados',
        'meses_pagados',
        'clave_tarjeta',
        'num_tarjeta',
        'fecha_inicio',
        'ult_ramo',
        'cpto_prestamo1',
        'descuento1',
        'plazo1',
        'cpto_prestamo2',
        'descuento2',
        'plazo2',
        'folio',
        'total_percep',
        'total_deduc',
        'total_pagar',
    ];
}

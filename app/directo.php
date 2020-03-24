<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class directo extends Model
{
    //
    protected $table = 'directo';
    public $timestamps = false;
    protected $fillable = [
        'num_issste',
        'u_version',
        'codigo_postal',    
        'nco_cve',
        'ent_cve',
        'curp',
        'nss',
        'clinica',
        'dto_estado',
        'sexo',
        'estado_civil',
        't_direecto',
        'fecha_alta',
        'fecha_baja',
        'fecha_emi_vd1',
        'fecha_ingreso',
        'num_exterior',
        'num_interior',
        'rfc',
        'telefono',
        'apellido_paterno',
        'apellido_materno',
        'nombre',
        'calle',
        'poblacion',
        'fec_nac',
        'flag_homo',
        'elig_proc',
        'usuario',
        'fecha_aud',
        'hora_aud',
        'componente_cve',
        'ip_maquina',
    ];
}

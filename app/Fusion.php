<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fusion extends Model
{
    
    protected $primaryKey = 'id';

    protected $table = "fusions"; 

    protected $filleable = ['indice','comuna','troncal','observacion','tipo_fibra_origen','minitubos_origen','cod_gis_tramo_origen','id_filamento_origen','minitubo_origen','nivel','cascada','tipo_fibra_destino','minitubos_destino','cod_gis_tramo_destino','id_filamento_destino','minitubo_destino','splitter','tipo_splitter'];


}

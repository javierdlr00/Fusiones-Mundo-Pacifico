<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('indice');
            $table->string('comuna');
            $table->string('troncal');
            $table->string('observacion')->nulleable();

            // DATOS DEL ORIGEN //
                // GENERALES //
                    $table->string('tipo_fibra_origen');
                    $table->string('minitubos_origen'); // TOTAL DE MINITUBOS DE LA ESTRUCTURA DE ORIGEN //
                    $table->string('cod_gis_tramo_origen'); // CODIGO CABLE //
                    $table->string('id_filamento_origen');
                    $table->string('minitubo_origen');

                // ESPECIFICOS DEL ORIGEN //
                    $table->string('nivel');
                    $table->string('cascada')->nulleable();

            // DATOS DEL DESTINO //
                // GENERALES //
                    $table->string('tipo_fibra_destino');
                    $table->string('minitubos_destino'); // TOTAL DE MINITUBOS DE LA ESTRUCTURA DE DESTINO //
                    $table->string('cod_gis_tramo_destino'); // CODIGO CABLE //
                    $table->string('id_filamento_destino');
                    $table->string('minitubo_destino');

                // ESPECIFICOS DEL DESTINO // 
                $table->string('splitter')->nulleable(); // SP1A,SP1B,SP2A,SP2B,SP3A,SP3B,SP4A,SP4B ... SPNA, SPNB //
                $table->string('tipo_splitter')->nulleable(); // 1X4 , 1X8 ... 1Xn //

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fusions');
    }
}

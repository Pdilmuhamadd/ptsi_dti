<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetrxStudiKelayakanTable extends Migration
{
    public function up()
    {
        Schema::create('trx_studi_kelayakan', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_dokumen');
            $table->text('ikhtisar');
            $table->text('latar_belakang');
            $table->text('konteks_bisnis');
            $table->string('tujuan');
            $table->string('sasaran');
            $table->text('analisis_opsi');
            $table->text('lingkup_fungsional');
            $table->text('lingkup_nonfungsional');
            $table->decimal('manfaat_finansial', 15, 2);
            $table->text('manfaat_nonfinansial');
            $table->decimal('biaya_pengembangan', 15, 2);
            $table->decimal('biaya_operasional', 15, 2);
            $table->text('identifikasi_risiko');
            $table->text('analisis_dampak_risiko');
            $table->text('strategi_mitigasi_risiko');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('kriteria_keberhasilan');
            $table->string('persetujuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trx_studi_kelayakan');
    }
}

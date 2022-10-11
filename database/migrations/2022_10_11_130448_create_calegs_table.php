<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calegs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('daerahpemilihan')->nullable();
            $table->string('nik')->nullable();
            $table->string('notelepon')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->dateTime('tanggallahir')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamatktp')->nullable();
            $table->text('alamatdomisili')->nullable();
            $table->string('statusperkawinan')->nullable();
            $table->string('pendidikanterakhir')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('sd')->nullable();
            $table->string('smp')->nullable();
            $table->string('sma')->nullable();
            $table->string('s1')->nullable();
            $table->string('s2')->nullable();
            $table->string('s3')->nullable();
            $table->text('riwayatdiklat')->nullable();
            $table->text('riwayatorganisasi')->nullable();
            $table->text('riwayatpekerjaan')->nullable();
            $table->text('riwayatpenghargaan')->nullable();
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
        Schema::dropIfExists('calegs');
    }
};

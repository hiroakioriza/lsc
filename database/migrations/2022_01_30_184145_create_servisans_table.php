<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Servisan;

class CreateServisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servisans', function (Blueprint $table) {
            $table->id();
            $table->char('KodeServis');
            $table->text('NamaBarang');
            $table->text('Kategori');
            $table->text('Kondisi');
            $table->text('Status');
            $table->text('Notes');
            $table->text('EstHarga');
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
        Schema::dropIfExists('servisans');
    }
}

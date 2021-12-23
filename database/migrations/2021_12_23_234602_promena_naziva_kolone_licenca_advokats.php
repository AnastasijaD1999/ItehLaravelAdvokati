<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKoloneLicencaAdvokats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advokats', function (Blueprint $table) {
            $table->renameColumn('licenca', 'brojlicence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advokats', function (Blueprint $table) {
            $table->renameColumn('brojlicence', 'licenca');
        });
    }
}

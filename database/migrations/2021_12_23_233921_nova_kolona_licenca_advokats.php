<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaLicencaAdvokats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advokats', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('licenca')->unique();
            });
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
            $table->dropColumn('licenca');
        });
    }
}

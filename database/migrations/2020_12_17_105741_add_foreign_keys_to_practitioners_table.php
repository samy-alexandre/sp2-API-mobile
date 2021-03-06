<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('practitioners', function (Blueprint $table) {
            $table->foreign('district_id', 'fk_practitioner_department1')->references('id')->on('sector_districts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('practitioners', function (Blueprint $table) {
            $table->dropForeign('fk_practitioner_department1');
        });
    }
}

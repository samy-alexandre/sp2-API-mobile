<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_sheets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('employee_id')->index('fk_employe_ficheFrais');
            $table->string('ref', 4);
            $table->decimal('calcultatedAmount', 10)->nullable();
            $table->string('unit', 8);
            $table->integer('sheetState_id')->index('fk_etat_ficheFrais');
            $table->date('creationDate');
            $table->date('modificationDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_sheets');
    }
}

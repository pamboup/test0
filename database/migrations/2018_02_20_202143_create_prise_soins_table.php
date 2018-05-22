<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisesoinsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'prisesoins';

    /**
     * Run the migrations.
     * @table prisesoins
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('typUrgTypInfr', 250)->nullable();
            $table->string('typUrgAutr', 250)->nullable();
            $table->string('besoinImmeAutr', 250)->nullable();
            $table->string('mesurPriseautr', 250)->nullable();
            $table->time('resumeSituationEnfant')->nullable();
            $table->string('typeurgence_ids', 50)->nullable();
            $table->string('typebesoinimmedia_ids', 50)->nullable();
            $table->string('typemesuresprises_ids', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}

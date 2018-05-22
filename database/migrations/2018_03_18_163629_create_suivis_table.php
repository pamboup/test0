<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuivisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'suivis';

    /**
     * Run the migrations.
     * @table suivis
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idenf')->nullable();
            $table->integer('numerVisite')->nullable();
            $table->date('suiviDate')->nullable();
            $table->time('suiviHeure')->nullable();
            $table->string('suiviLieu')->nullable();
            $table->string('suiviRegion', 45)->nullable();
            $table->string('suiviCommune', 45)->nullable();
            $table->string('suiviPersonResp', 55)->nullable();
            $table->string('suiviPersonRenc', 55)->nullable();
            $table->mediumText('suiviSituation')->nullable();
            $table->mediumText('suiviEvaluPersRenc')->nullable();
            $table->mediumText('suiviEvaluEnf')->nullable();
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

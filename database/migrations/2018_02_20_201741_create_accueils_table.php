<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccueilsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'accueils';

    /**
     * Run the migrations.
     * @table accueils
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('dateAccueil')->nullable();
            $table->time('heureAccueil')->nullable();
            $table->integer('enfants_id')->nullable();
            $table->integer('accompagnateurs_id')->nullable();
            $table->integer('situationfamiliales_id')->nullable();
            $table->integer('identificationparents_id')->nullable();
            $table->integer('priseSoin_id')->nullable();
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

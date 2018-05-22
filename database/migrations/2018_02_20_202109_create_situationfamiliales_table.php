<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituationfamilialesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'situationfamiliales';

    /**
     * Run the migrations.
     * @table situationfamiliales
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('pereVivant', 3)->nullable()->default('non');
            $table->string('mereVivante', 3)->nullable()->default('non');
            $table->string('parenSepare', 3)->nullable()->default('non');
            $table->string('parenVivanEns', 3)->nullable()->default('non');
            $table->integer('typeorphelin_id')->nullable()->default('0');
            $table->string('sitFamAutr', 250)->nullable();
            $table->string('vitAvecPere', 3)->nullable()->default('non');
            $table->string('vitAvecMere', 3)->nullable()->default('non');
            $table->string('vitAvecGrandParent', 3)->nullable()->default('non');
            $table->string('vitAveOncle', 3)->nullable()->default('non');
            $table->string('vitAvecTante', 3)->nullable()->default('non');
            $table->string('vitAvecAutre', 100)->nullable()->default('non');
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

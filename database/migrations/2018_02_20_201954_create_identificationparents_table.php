<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentificationparentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'identificationparents';

    /**
     * Run the migrations.
     * @table identificationparents
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('pere', 200)->nullable();
            $table->string('occupationPere', 250)->nullable();
            $table->integer('agepere')->nullable();
            $table->string('adressepere', 200)->nullable();
            $table->string('telephonepere', 12)->nullable();
            $table->string('mere', 200)->nullable();
            $table->string('occupationmere', 250)->nullable();
            $table->integer('agemere')->nullable();
            $table->string('adressemere', 200)->nullable();
            $table->string('telephonemere', 12)->nullable();
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

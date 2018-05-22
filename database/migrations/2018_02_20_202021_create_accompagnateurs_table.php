<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccompagnateursTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'accompagnateurs';

    /**
     * Run the migrations.
     * @table accompagnateurs
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('prenomacom', 55)->nullable();
            $table->string('nomacom', 45)->nullable();
            $table->integer('ageacom')->nullable();
            $table->string('adresseacom', 250)->nullable();
            $table->string('telephoneacom', 12)->nullable();
            $table->string('professionacom', 100)->nullable();
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

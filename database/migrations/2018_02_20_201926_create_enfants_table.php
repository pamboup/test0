<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfantsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'enfants';

    /**
     * Run the migrations.
     * @table enfants
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('prenomenf', 55)->nullable();
            $table->string('nomenf', 45)->nullable();
            $table->string('surnomsenf', 45)->nullable();
            $table->integer('ageenf')->nullable();
            $table->string('sexeenf', 10)->nullable();
            $table->date('datenaisEnf')->nullable();
            $table->string('lieunaisEnf', 100)->nullable();
            $table->string('ethnieenf', 100)->nullable();
            $table->string('profilenf', 250)->nullable();
            $table->string('rangFratrieEnf', 45)->nullable();
            $table->string('inscriEtaCivenf', 3)->nullable();
            $table->string('adresActuenf', 250)->nullable();
            $table->string('nationaliteenf', 45)->nullable();
            $table->string('paysOrigenf', 45)->nullable();
            $table->string('vilVillagOrigenf', 100)->nullable();
            $table->string('scolariseenf', 3)->nullable();
            $table->string('niveauScolarenf', 100)->nullable();
            $table->string('autrEnseignenf', 250)->nullable();
            $table->integer('autrEnseignNbrAnenf')->nullable();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('ID_ALUNO_ALU');
            $table ->integer('NM_NIS_ALU')->nullable();
            $table->string('ST_NOME_ALU', 100);
            $table->string('ST_RESPONSAVEL_ALU', 100)->nullable();
            $table->date('DT_NASCIMENTO_ALU')->nullable();
            $table->boolean('FL_SEXO_ALU')->nullable();
            $table->integer('NM_CEP_ALU', 5)->nullable();
            $table->string('ST_ENDERECO_ALU', 100)->nullable();
            $table->integer('NM_ENDERECO_ALU')->nullable();
            $table->string('ST_BAIRRO_ALU', 50)->nullable();
            $table->string('ST_UF_ALU', 2)->nullable();
            $table->string('NM_TELEFONE_ALU', 25)->nullable();
            $table->boolean('FL_STATUS_ALU')->nullable();
            $table->boolean('FL_IMAGEM_ALU')->nullable();
            $table->boolean('FL_SAIDA_ALU')->nullable();
            $table->boolean('FL_IRMAO_ALU')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}

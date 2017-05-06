<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $IDADE;
    
    //protected $table = 'alunos';
    protected $fillable = [
        'ID_ALUNO_ALU', 
        'NM_NIS_ALU', 
        'ST_NOME_ALU',
        'ST_RESPONSAVEL_ALU',
        'DT_NASCIMENTO_ALU',
        'ST_ENDERECO_ALU',
        'NM_ENDERECO_ALU',
        'ST_BAIRRO_ALU',
        'NM_TELEFONE_ALU',
        'FL_STATUS_ALU',
        'FL_IMAGEM_ALU',
        'FL_SAIDA_ALU',
        'FL_IRMAO_ALU'
    ];
    
//    protected $guarded = ['_token'];
    protected $primaryKey = 'ID_ALUNO_ALU';
}

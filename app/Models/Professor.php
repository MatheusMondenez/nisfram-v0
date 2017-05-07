<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    protected $primaryKey = 'ID_PROFESSOR_PRO';
    protected $fillable = [
        'ID_PROFESSOR_PRO',
        'ST_NOME_PRO'
    ];
}

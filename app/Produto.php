<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    //campos podem ser editados, inserção de dados. não pode ser chave primaria nem 'created_at', 'updated_at'. campos da tabela.
    protected $fillable = ['name', 'price'];
}

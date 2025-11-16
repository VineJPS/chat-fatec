<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; // teste esse


class Mensagens extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Comentarios';
    protected $fillable = ['id', 'nome', 'email', 'comentario'];
}

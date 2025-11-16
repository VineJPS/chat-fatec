<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; // teste esse


class Chat extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'chats';
    protected $fillable = ['id', 'nome', 'email', 'comentario'];
}

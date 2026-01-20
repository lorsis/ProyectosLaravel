<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['contenido', 'user_id', 'post_id']; 

    public function user() // CORREGIDO
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

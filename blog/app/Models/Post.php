<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mantener el nombre de la tabla
    protected $table = 'posts';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['usuario_id', 'titulo', 'contenido', 'user_id'];

    // Relación con User
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id'); 
    }
}

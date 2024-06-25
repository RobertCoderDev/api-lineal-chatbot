<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folders extends Model
{
    use HasFactory;
    // Nombre de la tabla
    protected $table = 'folders';
    protected $fillable = [
        'uuid',
        'name',
        'type',
        'color',
        'description',
        'bot_uuid',
    ];

    public $timestamps = true;

    // relacion con el modelo Flows 
    
    public function flows()
    {
        return $this->hasMany(Flows::class, 'folder_uuid', 'uuid');
    }
    
}

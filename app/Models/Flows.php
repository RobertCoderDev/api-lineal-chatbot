<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flows extends Model
{
    use HasFactory;
    // Nombre de la tabla
    protected $table = 'flows';
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'bot_id',
        'bot_uuid',
        'is_template',
        'folder_uuid',
    ];

    public $timestamps = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'Productos';
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected $fillable = [
        'categoriaId',
        'descripcion',
        'dimensiones',
        'imagen1',
        'imagen2',
        'nombre',
        'precio',
        'precioMarco',
        'subtitulo'
    ];

    public $incrementing = false;
    public $timestamps = false;

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoriaId');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'Categorias';
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre'
    ];

    public $incrementing = false;
    public $timestamps = false;

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'categoriaId');
    }
}

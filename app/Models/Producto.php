<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Producto extends Model
{
    use HasFactory;

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }

    public function getPrecioVentaFormatoAttribute()
    {
        return 'S/ ' . number_format($this->precio_venta, 2);
    }

    public function getPrecioCompraFormatoAttribute()
    {
        return 'S/ ' . number_format($this->precio_compra, 2);
    }
}

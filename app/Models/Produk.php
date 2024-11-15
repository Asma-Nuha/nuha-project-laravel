<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'stock'
    ];

    public function Produk()
    {
        return $this->belongsTo(User::class);
    }
}

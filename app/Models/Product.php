<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_id',
        'product',
        'description',
        'price',
        'stok',
        'image',
    ];


    public function categorie() {

        return $this->belongsTo(categorie::class, 'categories_id');
    }
}


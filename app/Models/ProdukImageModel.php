<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukImageModel extends Model
{
    use HasFactory;

    protected $table = 'produkimage';

    protected $fillable = [
        'name',
        'image',
        'description'
    ];
}

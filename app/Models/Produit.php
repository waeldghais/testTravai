<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'prix', 'categorie_id',
    ];
    
    public function getCategorie()
    {
        return $this->belongsTo('App\Models\Categories');
    }
}

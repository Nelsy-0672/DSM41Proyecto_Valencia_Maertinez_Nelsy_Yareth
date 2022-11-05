<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'image',
        'products_id'
        ];
    public function products(){
        return $this->belongsTo(product::class,'id');
    }
}
